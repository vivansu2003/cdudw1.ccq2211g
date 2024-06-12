<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $brands = Brand::all();
        $list = DB::table('product')
            ->join('category', 'category.id', '=', 'product.category_id')
            ->join('brand', 'brand.id', '=', 'product.brand_id')
            ->select(
                'product.id as product_id',
                'product.name',
                'product.image',
                'product.description',
                'product.status',
                'category.id as categoryid',
                'category.name as categoryname',
                'brand.name as brandname',
                'product.detail',
                'product.price',
                'product.pricesale',
                'product.qty',
            )
            ->where('product.status', '!=', 0)
            ->orderBy('product.created_at', 'desc')
            ->get();

        $htmlcategoryid = '';
        $htmlbrandid = '';
        foreach ($brands as $brand) {
            $htmlbrandid .= "<option value='{$brand->id}'>{$brand->name}</option>";
        }
        foreach ($categories as $category) {
            $htmlcategoryid .= "<option value='{$category->id}'>{$category->name}</option>";
        }

        return view('backend.product.index', compact('list', 'htmlbrandid', 'htmlcategoryid'));
    }

    public function store(StoreProductRequest $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->slug = Str::of($request->name)->slug('-');
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->detail = $request->detail;
        $product->price = $request->price;
        $product->pricesale = $request->pricesale;
        $product->qty = $request->qty;
        $product->description = $request->description;
        $product->created_at = now();
        $product->created_by = Auth::id() ?? 1; // Đảm bảo created_by không bị null
        $product->updatad_by = Auth::id() ?? 1;
        $product->status = $request->status;
        $product->save();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time().'-'.$file->getClientOriginalName();
            $file->move(public_path('public/product'), $filename);
            $product->image = 'public/product/'.$filename;

        }
        $product->save();

        return redirect()->route('admin.product.index')->with('success', 'Product added successfully.');
    }

    // Các phương thức khác...

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }

    public function status(string $id)
    {
        //
    }
}
