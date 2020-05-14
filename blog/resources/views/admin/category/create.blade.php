@extends('layouts.app_master_admin')
@section('content')
    <section class="content-header">
        <h1>Thêm mới danh mục sản phẩm</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{  route('admin.category.index') }}"> Category</a></li>
            <li class="active">Create</li>
        </ol>
    </section>
    <!-- Page Heading -->
    <section class="content">
        <div class="box">
            <div class="box-header with-border">
                <div class="box-body">
                    @include('admin.category.form')
                </div>
            </div>
        </div>
    </section>


@stop
