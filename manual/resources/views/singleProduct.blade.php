@extends('layouts.main')
<head>
    <link rel="stylesheet" type="text/css" href="/css/Products.css">
    <script src="{{asset('/js/')}}/imageSlideShow.js"></script>
</head>
@section('content')
<div class="single-product-wrapper">
    @foreach($products as $product)
    <div class="single-product-card">
{{--        title --}}
        <div class="single-product-header"><a class="singleProductBack" href="{{$_SESSION['prevLinkProductPage']}}">&larr; Go Back</a></div>
        <div class="single-product-title">
            <h1>{{$product->brand}} {{$product->model}}</h1>
        </div>
{{--        image --}}
        <div class="single-product-wrapper single-product-image">
            <img id="slideshow" width="640" height="426" src="{{asset('/images/cars')}}/{{$product->image}}"
             alt="Car Image of {{$product->brand}} {{$product->model}}">
            <div class="slideNumber" id="buttons"></div>
        </div>
        <div class="single-product-description">
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
                    <p><strong>{{ $product->description }}</strong></p>
                    <p><strong>Engine Capacity:</strong> {{$product->engine_capacity}} litres</p>
                    <p><strong>Transmission:</strong> {{$product->transmission}}</p>
                    {{-- Parse price --}}
                    <p><strong>Price:</strong> £{{ number_format($product->price, 2, '.') }}</p>
                    <p><strong>Currently available:</strong> {{ $product->stock }}</p>
                    <p><strong>Popularity:</strong> {{$product-> likes}}</p>
                    @if($product->stock > 0)
                        <button type="submit">Add to cart</button>
                    @else
                        <p>Out of stock!</p>
                    @endif
                </div>
            </form>
            <form action="/products/rating" method="post">
                @csrf
                <div class="rate">
                    <button name="dislike" value="-1">
                        <i class="fa fa-thumbs-o-down" aria-hidden="true"></i>
                    </button>
                    <button name="like" value="1">
                        <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                    </button>
                    <input hidden value="{{$product->productsId}}" name="prdId"/>
                    <input hidden value="{{$product->likes}}" name="currentLike"/>
                </div>
            </form>
        </div>
{{--        details --}}
    </div>
    @endforeach
</div>
<script>
    let imageIndex = 0;
    let data = '{{$product->image}}';
    let splitData = data.slice(0,data.length-4);
    let images = [data, splitData+"_1"+".jpg", splitData+"_2"+".jpg", splitData+"_3"+".jpg"]
    let slideshow = document.querySelector('#slideshow');

    let slideshowShifter = document.querySelector('#buttons');

    let slideShow = new imageSlideShow(data, splitData,'{{asset("/images/cars")}}', slideshowShifter, slideshow)
    slideShow.showSlideButtons();
</script>
@endsection
