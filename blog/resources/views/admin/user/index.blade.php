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
                            <td>Tên danh mục</td>
                            <td>Ảnh</td>
                            <td>Trạng thái</td>
                            <td>Hot</td>
                            <td>Ngày tạo</td>
                            <td>Thao tác</td>
                        </tr>
                        </thead>
                        <tbody>

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
