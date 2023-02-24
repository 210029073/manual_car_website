@extends('layouts')
@section('content')
<body>
    <h1> Basket </h1>
    <?php
        use App\Http\Controllers\BasketController;
        $controller = new BasketController();
        $basket = $controller->basket();
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

            <div>
                <p>Product No. {{$item->getId()}}</p>
                <p>Car Brand: {{$item->getBrand()}}</p>
                <p>Car Model: {{$item->getModel()}}</p>
                <p>Description: {{$item->getDescription()}}</p>
                <p>Price: £{{number_format($item->getPrice(), 2)}}</p>
                <button type="submit">Remove</button>
            </div>
            <br/>
        </form>
    @endforeach
    <div>
        <form action="/basket/checkout" method="get">
            <button type="submit">Checkout</button>
        </form>
    </div>
</body>
@endsection
