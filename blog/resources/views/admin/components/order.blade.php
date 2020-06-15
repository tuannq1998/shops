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
                <td><a>{{$order->name}}</a></td>
                <td>
                    <img src="" alt="">
                </td>
                <td>{{number_format($order->price,0,',','.')}} đ</td>
                <td>{{$order->qty}}</td>
                <td>{{number_format($order->qty * $order->price,0,',','.')}} đ</td>
                <td>
                    <a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
{{--@endif--}}
