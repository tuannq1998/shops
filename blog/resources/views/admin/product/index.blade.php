@extends('layouts.app_master_admin')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Quản lý sản phẩm</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{  route('admin.product.index') }}"> Keyword</a></li>
            <li class="active"><a> List</a></li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <div class="box-header with-border">
                    <div class="col-sm-2"><a href="{{route('admin.product.create')}}" class="btn btn-primary btn-sm">Thêm mới<i class="fa fa-plus"></i></a></div>
                </div>
            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <td>#</td>
                            <td>Tên sản phẩm</td>
                            <td>Ảnh</td>
                            <td>Giá</td>
                            <td>Hot</td>
                            <td>Trạng thái</td>
                            <td>Ngày tạo</td>
                            <td></td>
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($products))
                            @foreach($products as $product)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$product->name}}</td>
                                    <td><img style="width: 80px; height: 80px" src="{{pare_url_file($product->avatar)}}" alt=""></td>
                                    <td>{{number_format($product->price)}}</td>
                                    <td>
                                        @if($product->p_hot ==\App\Models\Product::NONE)
                                            <a href="{{route('admin.product.hot',$product->id )}}" class="label {{$product->getHot($product->hot)['class']}}">{{$product->getHot($product->hot)['name']}}</a>
                                        @else
                                            <a href="{{route('admin.product.hot',$product->id )}}" class="label {{$product->getHot($product->hot)['class']}}">{{$product->getHot($product->hot)['name']}}</a>
                                        @endif
                                    </td>
                                    <td>
                                        @if($product->p_active == \App\Models\Product::STATUS_SHOWS)
                                            <a href="{{route('admin.product.active',$product->id )}}" class="label {{$product->getStatus($product->hot)['class']}}">{{$product->getStatus($product->hot)['name']}}</a>
                                        @else
                                            <a href="{{route('admin.product.active',$product->id )}}" class="label {{$product->getStatus($product->hot)['class']}}">{{$product->getStatus($product->hot)['name']}}</a>
                                        @endif
                                    </td>
                                    <td>{{$product->created_at}}</td>
                                    <td>
                                        <a href="{{route('admin.product.update',$product->id)}}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
                                        <a href="{{route('admin.product.delete',$product->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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
