@extends('layouts.admin')
@section('content')
    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
            <p>
                Thành viên
                <i class="fas fa-angle-left right"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="../tables/simple.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Tất cả thành viên</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="../tables/data.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Thêm thành viên</p>
                </a>
            </li>
        </ul>
    </li>
@endsection
