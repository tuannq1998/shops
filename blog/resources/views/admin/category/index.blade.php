@extends('layouts.app_master_admin')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Quản lý danh mục sản phẩm</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{  route('admin.category.index') }}"> Category</a></li>
            <li class="active"><a> List</a></li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <div class="box-header with-border">
                    <div class="col-sm-2"><a href="{{route('admin.category.create')}}" class="btn btn-primary btn-sm">Tạo danh
                            mục <i class="fa fa-plus"></i></a></div>
                </div>
            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <td>#</td>
                            <td>Tên danh mục</td>
                            <td>Ảnh</td>
                            <td>Trạng thái</td>
                            <td>Hot</td>
                            <td>Ngày tạo</td>
                            <td>Thao tác</td>
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($categories))
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$category->name}}</td>
                                    <td>{{$category->avatar}}</td>
                                    <td>
                                        @if($category->c_active == \App\Models\Category::STATUS_SHOWS)
                                            <a href="{{route('admin.category.active',$category->id )}}" class="label {{$category->getStatus($category->active)['class']}}">{{$category->getStatus($category->active)['name']}}</a>
                                        @else
                                            <a href="{{route('admin.category.active',$category->id )}}" class="label {{$category->getStatus($category->active)['class']}}">{{$category->getStatus($category->active)['name']}}</a>
                                        @endif
                                    </td>
                                    <td>
                                        @if($category->c_hot == \App\Models\Category::NONE)
                                            <a href="{{route('admin.category.hot',$category->id )}}" class="label {{$category->getHot($category->hot)['class']}}">{{$category->getHot($category->hot)['name']}}</a>
                                        @else
                                            <a href="{{route('admin.category.hot',$category->id )}}" class="label {{$category->getHot($category->hot)['class']}}">{{$category->getHot($category->hot)['name']}}</a>
                                        @endif
                                    </td>
                                    <td>{{$category->created_at}}</td>
                                    <td>
                                        <a href="{{route('admin.category.update',$category->id)}}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
                                        <a href="{{route('admin.category.delete',$category->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
            <!-- /.box-footer-->
        </div>
        <!-- /.box -->
        </div>
    </section>
    <!-- /.content -->
@stop
