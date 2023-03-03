@extends('layouts')
@section('content')

<html>
    <head>
        <title>Basket</title>
        <!-- mobile view -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="/css/Basket.css" rel="stylesheet" type="text/css"/>
    </head>

<body>
    <main class = "container">
    <h1> Basket </h1>
    <?php
        use App\Http\Controllers\BasketController;
        $controller = new BasketController();
        $basket = $controller->basket();
        $total = 0;
    ?>
    @if($basket->count() == 0)
        <p>No items to show.</p>
    @endif
    @foreach($basket as $item)
        <form action="/basket/delete" method="get">
            <input type="hidden" name="id" value="{{$item->getId()}}"/>
            <input type="hidden" name="brand" value="{{$item->getBrand()}}"/>
            <input type="hidden" name="model" value="{{$item->getModel()}}"/>
            <input type="hidden" name="description" value="{{$item->getDescription()}}"/>
            <input type="hidden" name="price" value="{{$item->getPrice()}}"/>
            <input type="hidden" name="engineCapacity" value="{{$item->getEngineCapacity()}}"/>
            <input type="hidden" name="transmission" value="{{$item->getTransmission()}}"/>
            <input type="hidden" name="quantity" value="{{$item->getQuantity()}}"/>

            <section class ="basket">

                <div class ="item-basket">
                    <h2>Item summary</h>
                    <div class = "item-profile">
                        <div class = "item-image"></div>

                        <div class = "item-details">
                            <h3>{{$item->getBrand()}} {{$item->getModel()}}</h>
                            <div class="wrapper">
                                <div class= "item-info">
                                    <p>Product No. {{$item->getId()}}</p>
                                    <p>Car Brand: {{$item->getBrand()}}</p>
                                    <p>Car Model: {{$item->getModel()}}</p>
                                    <p>Price: £{{number_format($item->getPrice(), 2)}}</p>
                                    <p>Engine Capacity: {{number_format($item->getEngineCapacity(), 1)}}</p>
                                    <p>Transmission Type: {{$item->getTransmission()}}</p>
                                    <p>Stock remaining: {{$item->getQuantity()}}</p>
                                    <?php $total += $item->getPrice() ?>
                                </dev>
                            </div>
                            

                        </div>
                        <button type="submit">Remove</button>
                    </div>
                </div>
            </section>
            <br/>
        </form>
    @endforeach
    @if(\Illuminate\Support\Facades\Auth::check())
        <div class = "wrapper">
            <div class= "amount">
            <p>Total: £{{number_format($total, 2)}}</p>
            <form action="/basket/checkout" method="get">
                <button type="submit">Checkout</button>
            </form>
            </div>
        </div>
    </main>
    @endif
</body>
@endsection
