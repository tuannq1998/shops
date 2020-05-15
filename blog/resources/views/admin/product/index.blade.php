@extends('layouts.app_master_admin')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Quản lý từ khóa</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{  route('admin.keyword.index') }}"> Keyword</a></li>
            <li class="active"><a> List</a></li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <div class="box-header with-border">
                    <div class="col-sm-2"><a href="{{route('admin.keyword.create')}}" class="btn btn-primary btn-sm">Thêm mới<i class="fa fa-plus"></i></a></div>
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
                            <td>Ngày tạo</td>
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($keywords))
                            @foreach($keywords as $keyword)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$keyword->name}}</td>
                                    <td>
                                        @if($keyword->c_hot ==\App\Models\Keyword::NONE)
                                            <a href="{{route('admin.keyword.hot',$keyword->id )}}" class="label {{$keyword->getHot($keyword->hot)['class']}}">{{$keyword->getHot($keyword->hot)['name']}}</a>
                                        @else
                                            <a href="{{route('admin.keyword.hot',$keyword->id )}}" class="label {{$keyword->getHot($keyword->hot)['class']}}">{{$keyword->getHot($keyword->hot)['name']}}</a>
                                        @endif
                                    </td>
                                    <td>{{$keyword->created_at}}</td>
                                    <td>
                                        <a href="{{route('admin.keyword.update',$keyword->id)}}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
                                        <a href="{{route('admin.keyword.delete',$keyword->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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
