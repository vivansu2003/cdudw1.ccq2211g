<?php

use App\Http\Controllers\backend\BannerController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\ContactController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\MenuController;
use App\Http\Controllers\backend\OrderController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\TopicController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\frontend\ContactController as lienheController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ProductController as sanphamController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('site.home');
Route::get('san-pham', [sanphamController::class, 'index'])->name('site.product');
Route::get('chi-tiet-san-pham/{slug}', [sanphamController::class, 'haha'])->name('site.product.detail');
Route::get('lien-he', [lienheController::class, 'index'])->name('site.contact');

Route::prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard.index');
    //banner
    Route::prefix('banner')->group(function () {
        Route::get('/', [BannerController::class, 'index'])->name('admin.banner.index');
        Route::get('/trash', [BannerController::class, 'index'])->name('admin.banner.trash');
        Route::get('/show/{id}', [BannerController::class, 'index'])->name('admin.banner.show');
        Route::get('/create', [BannerController::class, 'index'])->name('admin.banner.create');
        Route::get('/product', [BannerController::class, 'index'])->name('admin.banner.product');
        Route::get('/edit/{id}', [BannerController::class, 'index'])->name('admin.banner.edit');
        Route::get('/update/{id}', [BannerController::class, 'index'])->name('admin.banner.update');
        Route::get('/delete/{id}', [BannerController::class, 'index'])->name('admin.banner.delete');
        Route::get('/restore/{id}', [BannerController::class, 'index'])->name('admin.banner.restore');
        Route::get('/destroy/{id}', [BannerController::class, 'index'])->name('admin.banner.destroy');

    });
    //category
    Route::prefix('catrgory')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('admin.category.index');
        Route::get('/trash', [CategoryController::class, 'index'])->name('admin.category.trash');
        Route::get('/show/{id}', [CategoryController::class, 'index'])->name('admin.category.show');
        Route::get('/create', [CategoryController::class, 'index'])->name('admin.category.create');
        Route::get('/product', [CategoryController::class, 'index'])->name('admin.category.product');
        Route::get('/edit/{id}', [CategoryController::class, 'index'])->name('admin.category.edit');
        Route::get('/update/{id}', [CategoryController::class, 'index'])->name('admin.category.update');
        Route::get('/delete/{id}', [CategoryController::class, 'index'])->name('admin.category.delete');
        Route::get('/restore/{id}', [CategoryController::class, 'index'])->name('admin.category.restore');
        Route::get('/destroy/{id}', [CategoryController::class, 'index'])->name('admin.category.destroy');

    });

    //contact
    Route::prefix('contact')->group(function () {
        Route::get('/', [ContactController::class, 'index'])->name('admin.contact.index');
        Route::get('/trash', [ContactController::class, 'index'])->name('admin.contact.trash');
        Route::get('/show/{id}', [ContactController::class, 'index'])->name('admin.contact.show');
        Route::get('/create', [ContactController::class, 'index'])->name('admin.contact.create');
        Route::get('/product', [ContactController::class, 'index'])->name('admin.contact.product');
        Route::get('/edit/{id}', [ContactController::class, 'index'])->name('admin.contact.edit');
        Route::get('/update/{id}', [ContactController::class, 'index'])->name('admin.contact.update');
        Route::get('/delete/{id}', [ContactController::class, 'index'])->name('admin.contact.delete');
        Route::get('/restore/{id}', [ContactController::class, 'index'])->name('admin.contact.restore');
        Route::get('/destroy/{id}', [ContactController::class, 'index'])->name('admin.contact.destroy');

    });

    //menu
    Route::prefix('menu')->group(function () {
        Route::get('/', [MenuController::class, 'index'])->name('admin.menu.index');
        Route::get('/trash', [MenuController::class, 'index'])->name('admin.menu.trash');
        Route::get('/show/{id}', [MenuController::class, 'index'])->name('admin.menu.show');
        Route::get('/create', [MenuController::class, 'index'])->name('admin.menu.create');
        Route::get('/product', [MenuController::class, 'index'])->name('admin.menu.product');
        Route::get('/edit/{id}', [MenuController::class, 'index'])->name('admin.menu.edit');
        Route::get('/update/{id}', [MenuController::class, 'index'])->name('admin.menu.update');
        Route::get('/delete/{id}', [MenuController::class, 'index'])->name('admin.menu.delete');
        Route::get('/restore/{id}', [MenuController::class, 'index'])->name('admin.menu.restore');
        Route::get('/destroy/{id}', [MenuController::class, 'index'])->name('admin.menu.destroy');

    });

    //Order
    Route::prefix('order')->group(function () {
        Route::get('/', [OrderController::class, 'index'])->name('admin.order.index');
        Route::get('/trash', [OrderController::class, 'index'])->name('admin.order.trash');
        Route::get('/show/{id}', [OrderController::class, 'index'])->name('admin.order.show');
        Route::get('/create', [OrderController::class, 'index'])->name('admin.order.create');
        Route::get('/product', [OrderController::class, 'index'])->name('admin.order.product');
        Route::get('/edit/{id}', [OrderController::class, 'index'])->name('admin.order.edit');
        Route::get('/update/{id}', [OrderController::class, 'index'])->name('admin.order.update');
        Route::get('/delete/{id}', [OrderController::class, 'index'])->name('admin.order.delete');
        Route::get('/restore/{id}', [OrderController::class, 'index'])->name('admin.order.restore');
        Route::get('/destroy/{id}', [OrderController::class, 'index'])->name('admin.order.destroy');

    });

    //post
    Route::prefix('post')->group(function () {
        Route::get('/', [PostController::class, 'index'])->name('admin.post.index');
        Route::get('/trash', [PostController::class, 'index'])->name('admin.post.trash');
        Route::get('/show/{id}', [PostController::class, 'index'])->name('admin.post.show');
        Route::get('/create', [PostController::class, 'index'])->name('admin.post.create');
        Route::get('/product', [PostController::class, 'index'])->name('admin.post.product');
        Route::get('/edit/{id}', [PostController::class, 'index'])->name('admin.post.edit');
        Route::get('/update/{id}', [PostController::class, 'index'])->name('admin.post.update');
        Route::get('/delete/{id}', [PostController::class, 'index'])->name('admin.post.delete');
        Route::get('/restore/{id}', [PostController::class, 'index'])->name('admin.post.restore');
        Route::get('/destroy/{id}', [PostController::class, 'index'])->name('admin.post.destroy');

    });

    //product
    Route::prefix('product')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('admin.product.index');
        Route::get('/trash', [ProductController::class, 'index'])->name('admin.product.trash');
        Route::get('/show/{id}', [ProductController::class, 'index'])->name('admin.product.show');
        Route::get('/create', [ProductController::class, 'index'])->name('admin.product.create');
        Route::get('/product', [ProductController::class, 'index'])->name('admin.product.product');
        Route::get('/edit/{id}', [ProductController::class, 'index'])->name('admin.product.edit');
        Route::get('/update/{id}', [ProductController::class, 'index'])->name('admin.product.update');
        Route::get('/delete/{id}', [ProductController::class, 'index'])->name('admin.product.delete');
        Route::get('/restore/{id}', [ProductController::class, 'index'])->name('admin.product.restore');
        Route::get('/destroy/{id}', [ProductController::class, 'index'])->name('admin.product.destroy');

    });

    //topic
    Route::prefix('topic')->group(function () {
        Route::get('/', [TopicController::class, 'index'])->name('admin.topic.index');
        Route::get('/trash', [TopicController::class, 'index'])->name('admin.topic.trash');
        Route::get('/show/{id}', [TopicController::class, 'index'])->name('admin.topic.show');
        Route::get('/create', [TopicController::class, 'index'])->name('admin.topic.create');
        Route::get('/product', [TopicController::class, 'index'])->name('admin.topic.product');
        Route::get('/edit/{id}', [TopicController::class, 'index'])->name('admin.topic.edit');
        Route::get('/update/{id}', [TopicController::class, 'index'])->name('admin.topic.update');
        Route::get('/delete/{id}', [TopicController::class, 'index'])->name('admin.topic.delete');
        Route::get('/restore/{id}', [TopicController::class, 'index'])->name('admin.topic.restore');
        Route::get('/destroy/{id}', [TopicController::class, 'index'])->name('admin.bantopicner.destroy');

    });

    //user
    Route::prefix('user')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('admin.user.index');
        Route::get('/trash', [UserController::class, 'index'])->name('admin.user.trash');
        Route::get('/show/{id}', [UserController::class, 'index'])->name('admin.user.show');
        Route::get('/create', [UserController::class, 'index'])->name('admin.user.create');
        Route::get('/product', [UserController::class, 'index'])->name('admin.user.product');
        Route::get('/edit/{id}', [UserController::class, 'index'])->name('admin.user.edit');
        Route::get('/update/{id}', [UserController::class, 'index'])->name('admin.user.update');
        Route::get('/delete/{id}', [UserController::class, 'index'])->name('admin.user.delete');
        Route::get('/restore/{id}', [UserController::class, 'index'])->name('admin.user.restore');
        Route::get('/destroy/{id}', [UserController::class, 'index'])->name('admin.user.destroy');

    });
});
