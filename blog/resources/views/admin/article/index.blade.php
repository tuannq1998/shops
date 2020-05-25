@extends('layouts.app_master_admin')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Quản lý bài viết</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{  route('admin.article.index') }}"> Article</a></li>
            <li class="active"><a> List</a></li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <div class="box-header with-border">
                    <div class="col-sm-2"><a href="{{route('admin.article.create')}}" class="btn btn-primary btn-sm">Thêm mới<i class="fa fa-plus"></i></a></div>
                </div>
            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <td>#</td>
                            <td width="20%">Tên bài viết</td>
                            <td style="width: 100px;">Ảnh</td>
                            <td style="width: 500px">Mô tả</td>
                            <td>Trạng thái</td>
                            <td>Ngày tạo</td>
                            <td>Thao tác</td>
                            <td></td>
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($articles))
                            @foreach($articles as $article)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$article->name}}</td>
                                    <td><img style="width: 100px; height: 80px" src="{{pare_url_file($article->avatar)}}" alt=""></td>
                                    <td>{{$article->description}}</td>
                                    <td>
                                        @if($article->a_active == \App\Models\Article::STATUS_Public)
                                            <a href="{{route('admin.article.active',$article->id )}}" class="label {{$article->getStatus($article->hot)['class']}}">{{$article->getStatus($article->hot)['name']}}</a>
                                        @else
                                            <a href="{{route('admin.article.active',$article->id )}}" class="label {{$article->getStatus($article->hot)['class']}}">{{$article->getStatus($article->hot)['name']}}</a>
                                        @endif
                                    </td>
                                    <td>{{$article->created_at}}</td>
                                    <td>
                                        <a href="{{route('admin.article.update',$article->id)}}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
                                        <a href="{{route('admin.article.delete',$article->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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
