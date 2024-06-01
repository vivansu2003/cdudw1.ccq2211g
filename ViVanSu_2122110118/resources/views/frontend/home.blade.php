@extends('layouts.site')
@section('title', 'Home')
@section('header')
    <link rel="stylesheet" href="home.css">
@endsection
@section('content')
    <x-ban-ner />
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
