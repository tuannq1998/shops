@extends('layouts.app_master_admin')
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="">Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="">Danh mục</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cập nhật</li>
        </ol>
    </nav>
    <!-- Page Heading -->
    <div class="container">
        @include('admin.category.form')
    </div>

@stop
