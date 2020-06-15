@extends('layouts.app_master_frontend')
@section('content')
    <div class="our-product-area">
        <div class="container">
            <!-- area title start -->
            <div class="area-title">
                <h2>Giỏ hàng của bạn</h2>
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên sản phẩm</th>
                    <th>Hình ảnh</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                    <th>Thao tác</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $key => $product)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td><a>{{$product->name}}</a></td>
                        <td><img style="width: 80px; height: 80px" src="{{pare_url_file($product->options->avatar)}}"
                                 alt=""></td>
                        <td>{{number_format($product->price,0,',','.')}} đ</td>
                        <td>{{$product->qty}}</td>
                        <td>{{number_format($product->qty * $product->price,0,',','.')}} đ</td>
                        <td>
                            <a href="" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
                            <a href="{{route('delete.shopping.cart', $key)}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <h2 class="pull-right">Tổng tiền cần thanh toán: {{Cart::subtotal()}} <a href="{{route('form.pay')}}" class="btn btn-success">Thanh toán</a></h2>
        </div>
    </div>
@stop
