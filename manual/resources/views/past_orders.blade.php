@extends('layouts')
@section('content')
    <body>
<div>
    @foreach($customerOrders as $orders)
        @foreach($orders as $order)
            <p>{{dd($order->getId())}}</p>
        @endforeach
    @endforeach
</div>
    </body>
@endsection
