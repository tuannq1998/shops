{{--@if($orders)--}}
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
        @foreach($orders as $order)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td><a href="">{{$order->product->name ?? "[N\A]"}}</a></td>
                <td>
                    <img style="with:50px; height: 50px" src="{{pare_url_file($order->product->avatar)}}" alt="">
                </td>
                <td>{{number_format($order->price,0,',','.')}} đ</td>
                <td>{{$order->qty}}</td>
                <td>{{number_format($order->qty * $order->price,0,',','.')}} đ</td>
                <td>
                    <a href="{{route('admin.transaction.delete.order_item', $order->id)}}" class="btn btn-danger js-delete-order-item"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
{{--@endif--}}
