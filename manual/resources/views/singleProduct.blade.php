@extends('layouts')
@section('content')
<div>
    @foreach($products as $product)
    <div>
{{--        title --}}
        <div>
            <h1>{{$product->brand}} {{$product->model}}</h1>
        </div>
{{--        image --}}
            <img width="640" height="426" src="{{asset("/images/cars/")}}/{{$product->image}}"
             alt="Car Image of {{$product->brand}} {{$product->model}}">
        <div>
            <form action="/products/add" method="post">
                @csrf
                <input type="hidden" name="brand" value="{{$product->brand}}"/>
                <input type="hidden" name="model" value="{{$product->model}}"/>
                <input type="hidden" name="description" value="{{$product->description}}"/>
                <input type="hidden" name="engineCapacity" value="{{$product->engine_capacity}}"/>
                <input type="hidden" name="transmission" value="{{$product->transmission}}"/>
                <input type="hidden" name="price" value="{{$product->price}}"/>
                <input type="hidden" name="stock" value="{{$product->stock}}"/>
                <input type="hidden" name="likes" value="{{$product->likes}}"/>
                <input type="hidden" name="image" value="{{$product->image}}"/>
                <div>
                    {{-- Try not to remove the following lines below, holds backend (Ibrahim)--}}
                    {{-- Will attach to a HTML Form --}}
                    {{-- This should enumerate all product details here... --}}
                    <p><i>{{ $product->description }}</i></p>
                    <p>Engine Capacity: {{$product->engine_capacity}}</p>
                    <p>Transmission: {{$product->transmission}}</p>
                    {{-- Parse price --}}
                    <p>Price: £{{ number_format($product->price, 2, '.') }}</p>
                    <p>Currently available: {{ $product->stock }}</p>
                    <p>Popularity: {{$product-> likes}}</p>
                    @if($product->stock > 0)
                        <button type="submit">Add to cart</button>
                    @else
                        <p>Out-of-stock!</p>
                    @endif
                    <a>
                        <button>Add review</button>
                    </a>
                </div>
            </form>
        </div>
{{--        details --}}
    </div>
    @endforeach
</div>
@endsection
