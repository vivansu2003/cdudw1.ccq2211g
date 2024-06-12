<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBrandRequest;
use App\Models\Brand;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = Brand::where('status', '!=', 0)->orderBy('created_at', 'desc')->get();
        $htmlparentid = '';
        $htmlsortorder = '';
        foreach ($list as $item) {
            $htmlparentid .= "<option value='".$item->id."'>".$item->name.'</option>';
            $htmlsortorder .= "<option value='".$item->sort_order."'>".$item->name.'</option>';
        }

        return view('backend.brand.index', compact('list', 'htmlparentid', 'htmlsortorder'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBrandRequest $request)
    {
        // Debugging lines
        \Log::info('StoreBrandRequest received', ['request' => $request->all()]);

        $brand = new Brand();
        $brand->name = $request->name;
        $brand->slug = Str::slug($request->name);
        $brand->description = $request->description;
        $brand->created_at = now();
        $brand->created_by = Auth::id() ?? 1;
        $brand->status = $request->status;

        // Handle file upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            if ($file->isValid()) {
                $filename = time().'-'.$file->getClientOriginalName();
                $file->move(public_path('public/brand'), $filename);
                $brand->image = 'public/brand/'.$filename;

                // Debugging line
                \Log::info('File uploaded successfully', ['filename' => $filename]);
            } else {
                // Debugging line
                \Log::error('Uploaded file is not valid');
            }
        } else {
            // Debugging line
            \Log::error('No file uploaded');
        }

        $brand->save();

        return redirect()->route('admin.brand.index')->with('success', 'brand thêm thành công');
    }

    public function edit($id)
    {
        $brand = Brand::findOrFail($id);

        return view('backend.brand.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreBrandRequest $request, $id)
    {
        $brand = Brand::findOrFail($id);
        $brand->name = $request->name;
        $brand->slug = Str::slug($request->name);
        $brand->description = $request->description;
        $brand->updated_at = now();
        $brand->updated_by = Auth::id() ?? 1;
        $brand->status = $request->status;

        // Handle file upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            if ($file->isValid()) {
                $filename = time().'-'.$file->getClientOriginalName();
                $file->move(public_path('public/brand'), $filename);
                $brand->image = 'public/brand/'.$filename;

                // Debugging line
                \Log::info('File uploaded successfully', ['filename' => $filename]);
            } else {
                // Debugging line
                \Log::error('Uploaded file is not valid');
            }

        }

        $brand->save();

        return redirect()->route('admin.brand.index')->with('success', 'Brand cập nhật thành công');
    }
    // Other methods ...
}
