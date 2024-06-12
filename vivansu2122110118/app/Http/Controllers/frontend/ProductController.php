<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        return view('frontend.product');
    }

    public function product($slug)
    {
        return view('frontend.product_detail');
    }
}
