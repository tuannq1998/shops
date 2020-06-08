@extends('layouts.app_master_admin')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Quản lý thành viên</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
            <li><a href="{{  route('admin.user.index') }}"> Thành viên</a></li>
            <li class="active"><a> danh sách</a></li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <td>#</td>
                            <td>Tên</td>
                            <td>Ảnh</td>
                            <td>Email</td>
                            <td>Phone</td>
                            <td>Thao tác</td>
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($users))
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$user->name}}</td>
                                    <td><img style="width: 80px; height: 80px" src="{{pare_url_file($user->avatar)}}" alt=""></td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->phone}}</td>
                                    <td>
                                        <a href="{{route('admin.product.update',$user->id)}}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
                                        <a href="{{route('admin.product.delete',$user->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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
