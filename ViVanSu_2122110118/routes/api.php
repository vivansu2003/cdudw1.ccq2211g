<?php

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/product', function () {
    return Product::all();
});

Route::post('/product', function () {

});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
