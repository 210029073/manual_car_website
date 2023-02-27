@extends('layouts')
@section('content')
    <body>
<div>
    @foreach($customerOrders as $orders)
            <p>Order Ref No.: {{$orders->ordersId}}</p>
            <p>Product No.: {{$orders->productsId}}</p>
            <p>Product No.: {{$orders->price}}</p>
            <p>Order Date: {{$orders->orderDate}}</p>
            @if($orders->isProcessed)
                <p>Status: Order is processed</p>
            @else
                <p>Status: Order is pending</p>
           @endif
    @endforeach
</div>
    </body>
@endsection
