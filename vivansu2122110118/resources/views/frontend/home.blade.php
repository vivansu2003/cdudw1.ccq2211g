@extends('layouts.site')
@section('title', 'Home')
@section('header')
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
@endsection
@section('content')
    <x-slider />
    <!--danhmucsanpham-->
    <x-cate-gory />
    <!-- endcategory-->
    <x-product-new />
    <!-- endproductnew-->
    <x-product-sale />
    <!--endproductsale-->
    <x-new-post />
    <!--endpostnew-->
    <!--endhome-->
    @yield('footer')
@endsection
