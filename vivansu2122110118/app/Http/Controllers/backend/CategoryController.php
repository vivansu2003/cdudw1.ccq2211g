<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = Category::where('status', '!=', 0)
            ->orderBy('created_at', 'desc')
            ->select('id', 'image', 'slug', 'sort_order', 'status')
            ->get();
        $htmlparentid = '';
        $htmlsortorder = '';
        foreach ($list as $item) {
            $htmlparentid .= "<option value='".$item->id."'>".$item->name.'</option>';
            $htmlsortorder .= "<option value='".$item->sort_order."'>".$item->name.'</option>';

        }

        return view('backend.category.index', compact('list', 'htmlparentid', 'htmlsortorder'));
    }

    public function trash()
    {
        $list = Category::where('status', '!=', 0)
            ->orderBy('created_at', 'desc')
            ->select('id', 'image', 'slug', 'sort_order', 'status')
            ->get();

        return view('backend.category.trash', compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     */

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {

        $category = new Category();
        $category->name = $request->name;
        $category->slug = Str::of($request->name)->slug('-');
        $category->parent_id = $request->parent_id;
        $category->sort_order = $request->sort_order;
        $category->description = $request->description;
        $category->created_at = date('Y-m-d H:i:s');
        $category->created_by = Auth::id() ?? 1;
        $category->status = $request->status;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time().'-'.$file->getClientOriginalName();
            $file->move(public_path('public/category'), $filename);
            $category->image = 'public/category/'.$filename;
        }

        if ($category->save()) {
            return redirect()->route('admin.category.index')->with('success', 'Category thêm thành công!');
        } else {
            return redirect()->route('admin.category.index')->with('error', 'thêm category thất bại .');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $category = Category::find($id);
        if (! $category) {
            return redirect()->route('admin.category.index')->with('error', 'Category không tồn tại.');
        }

        $list = Category::where('status', '!=', 0)->orderBy('created_at', 'desc')->get();
        $htmlparentid = '';
        $htmlsortorder = '';
        foreach ($list as $item) {
            $htmlparentid .= "<option value='".$item->id."'>".$item->name.'</option>';
            $htmlsortorder .= "<option value='".$item->sort_order."'>".$item->name.'</option>';
        }

        return view('backend.category.edit', compact('category', 'htmlparentid', 'htmlsortorder'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreCategoryRequest $request, $id)
    {
        $category = Category::find($id);
        if (! $category) {
            return redirect()->route('admin.category.index')->with('error', 'Category không tồn tại.');
        }

        $category->name = $request->name;
        $category->slug = Str::of($request->name)->slug('-');
        $category->parent_id = $request->parent_id;
        $category->sort_order = $request->sort_order;
        $category->description = $request->description;
        $category->updated_at = date('Y-m-d H:i:s');
        $category->updated_by = Auth::id() ?? 1;
        $category->status = $request->status;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time().'-'.$file->getClientOriginalName();
            $file->move(public_path('public/category'), $filename);
            $category->image = 'public/category/'.$filename;
        }

        if ($category->save()) {
            return redirect()->route('admin.category.index')->with('success', 'Category cập nhật thành công!');
        } else {
            return redirect()->route('admin.category.index')->with('error', 'Cập nhật category thất bại.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::find($id);
        if (! $category) {
            return redirect()->route('admin.category.trash')->with('error', 'Category không tồn tại.');
        }

        $category->delete();

        return redirect()->route('admin.category.trash')->with('success', 'Category permanently deleted!');
    }

    public function restore(string $id)
    {
        $category = Category::find($id);
        if (! $category) {
            return redirect()->route('admin.category.trash')->with('error', 'Category không tồn tại.');
        }

        $category->status = 1;
        $category->save();

        return redirect()->route('admin.category.trash')->with('success', 'Category restored successfully!');
    }

    public function status(string $id)
    {
        //
    }
}
