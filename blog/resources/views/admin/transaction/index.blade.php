@extends('layouts.app_master_admin')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Quản lý đơn hàng</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
            <li><a href="{{  route('admin.transaction.index') }}"> Đơn hàng</a></li>
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
                            <td>Tên khách hàng</td>
                            <td>Địa chỉ</td>
                            <td>Số điện thoại</td>
                            <td>Tổng tiền</td>
                            <td>Trạng thái</td>
                            <td>Thao tác</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($transactions as $transaction)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$transaction->name}}</td>
                                <td>{{$transaction->address}}</td>
                                <td>{{$transaction->phone}}</td>
                                <td>{{number_format($transaction->total,0,',','.')}} VNĐ</td>
                                <td>
                                    @if($transaction->status == 1)
                                        <a href="" class="label-success label">Đã xử lý</a>
                                    @else
                                        <a href="" class="label-default label">Chờ xử lý</a>
                                    @endif
                                </td>
                                <td>
                                    <a href=""
                                       class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
                                    <a class="btn btn-xs js_order_item"
                                       href="{{route('admin.transaction.view',$transaction->id)}}"
                                       data-id="{{$transaction->id}}"><i class="fa fa-eye"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.box-footer-->
            </div>
            <!-- /.box -->
        </div>
    </section>
    <!-- /.content -->
    <div class="modal fade" id="myModalOrder" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header modal-lg">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Chi tiết mã đơn hàng #<b class="transaction_id"></b></h4>
                </div>
                <div class="modal-body">
                    <div class="content">

                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
                </div>
            </div>

        </div>
    </div>
@stop
@section('script')
    <script>
        $(function () {
            $(".js_order_item").click(function (event) {
                event.preventDefault();
                let $this = $(this);
                let URL = $this.attr('href');
                $.ajax({
                    url:URL
                }).done(function (results) {
                    console.log( results);
                    $("#myModalOrder .content").html(results.html);
                    $('#myModalOrder').modal({
                        show: true
                    });
                });

                $(".transaction_id").text('').text($this.attr('data-id'));
            });
        })
    </script>
@stop
