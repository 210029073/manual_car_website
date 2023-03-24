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
    <main class="container">
        @if(session()->has('deleteItemFromBasket'))
            <div class="success-popup">
                <h4>{{session()->get('deleteItemFromBasket')}}</h4>
            </div>
        @endif
        <h1> Basket </h1>
        <?php
        use App\Http\Controllers\BasketController;
        $controller = new BasketController();
        $basket = $controller->basket();
        $total = 0;
        ?>
        @if($basket->count() == 0)
            <p>No items to show.</p>
        @else
        <h2>Item summary</h2>
        <section class="basket">
            <div class="basket-details">
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

                        <div class="item-basket">
                            <div class="item-image">
                                <div>
                                <img width="240" height="160"
                                     src="{{asset('/images/cars')}}/{{$item->getImagePath()}}"/>

                                </div>
                            </div>
                            <div class="item-details">
                                <div class="wrapper">
                                    <div class="item-info">
                                        <h3>{{$item->getBrand()}} {{$item->getModel()}}</h3>
                                        <p>Product No. {{$item->getId()}}</p>
                                        <p>Car Brand: {{$item->getBrand()}}</p>
                                        <p>Car Model: {{$item->getModel()}}</p>
                                        <p>Price: £{{number_format($item->getPrice(), 2)}}</p>
                                        <p>Engine Capacity: {{number_format($item->getEngineCapacity(), 1)}}</p>
                                        <p>Transmission Type: {{$item->getTransmission()}}</p>
                                        <p>Stock remaining: {{$item->getQuantity()}}</p>
                                        <?php $total += $item->getPrice() ?>
                                        <button type="submit" class="submitCSS">Remove</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br/>
                    </form>
                @endforeach
            </div>
            <div class="basket-total">
                <div class="wrapper">
                    <div class="amount">
                        <p class="ts">Total:</p>
                        <p class="tsp">£{{number_format($total, 2)}}</p>
                        <form action="/basket/checkout" method="get">
                            <button type="submit" class="submitCSS">Checkout</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        @endif
    </main>
    </body>
@endsection
