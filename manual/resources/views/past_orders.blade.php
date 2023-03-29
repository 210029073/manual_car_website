@extends('layouts.main')
@section('content')
    <head>
        <link rel="stylesheet" type="text/css" href="/css/pastorders.css"/>
    </head>
    <body>
<div class="pastOrdersContainer">
    @foreach($customerOrders as $orders)
        <div class="pastOrder">
            <div class="orderDetails">
                <p><strong>Order Ref No.:</strong> {{$orders->ordersId}}</p>
                <p><strong>Product No.:</strong> {{$orders->productsId}}</p>
                <p><strong>Product Price:</strong> {{$orders->price}}</p>
                <p><strong>Order Date:</strong> {{$orders->orderDate}}</p>
            </div>
            <div class="orderStatus">
                @if($orders->isProcessed)
                    <p><strong>Status:</strong> Order is processed</p>
                @else
                    <p><strong>Status:</strong> Order is pending</p>
                @endif
            </div>
        </div>
    @endforeach
</div>
    </body>
@endsection
