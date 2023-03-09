@extends('layouts')
<head>
    <link rel="stylesheet" type="text/css" href="/css/Products.css">
</head>
@section('title','Products')
@section('content')
    <body>
    @if(session()->has('itemAlreadyExists'))
        <div class="error-popup">
            <h4>{{session()->get('itemAlreadyExists')}}</h4>
        </div>
    @endif
    @if(session()->has('successAddProduct'))
        <div class="success-popup">
            <h4>{{session()->get('successAddProduct')}}</h4>
        </div>
    @endif
    <h1>Cars for sale</h1>
    <div class="filter-container" style="position: relative;margin-top:2%;margin-bottom: 2%">
        <form method='post'>
            <button1 id="filter-all" class="filter-button active">All Products</button1>
            <button1 id="filter-sedan" class="filter-button">Sedans</button1>
            <button1 id="filter-suv" class="filter-button" onclick="changeProd()">SUVs</button1>
            <button1 id="filter-truck" class="filter-button">Trucks</button1>
        </form>
    </div>
    <div class="products-ui-wrapper">
        <div class="filter-container" style="position: relative;margin-top:2%;margin-bottom: 2%">
            {{--        <button1 id="filter-all" class="filter-button active">All Products</button1>--}}
            {{--        <button1 id="filter-sedan" class="filter-button">Sedans</button1>--}}
            {{--        <button1 id="filter-suv" class="filter-button">SUVs</button1>--}}
            {{--        <button1 id="filter-truck" class="filter-button">Trucks</button1>--}}
            <form action="{{route("browse_products")}}" method="get">
                <div class="product-filter-form-wrapper">
                    <div>
                        <div>
                            <label>Select by Car Brand: </label>
                        </div>
                        <div>
                            <select name="cars">
                                <option>All Cars</option>
                                <?php
                                    use \App\Http\Controllers\ProductFilterController;
                                    $productFilter = new ProductFilterController();
                                ?>
                                @foreach($productFilter->getCarBrand() as $item)
                                    <option>{{$item}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="price-range">
                        <div class="price-range-title">
                            <label>Price Range</label>
                        </div>
                        <div class="price-range-from-to">
                            <div>
                                <label>From</label>
                                <input min="0" value="0" type="number" name="fromNum"/>
                            </div>
                            <div>
                                <label>To</label>
                                <br/>
                                <input min="0"  value="0" type="number" name="toNum">
                            </div>
                        </div>
                    </div>
                    <div>
                        <div><label>Select a car transmission:</label>
                            <label>Manual</label>
                            <input type="radio" value="Manual" name="filter_transmission">
                        </div>
                        <div>
                            <label>Automatic</label>
                            <input type="radio" value="Automatic" name="filter_transmission">
                        </div>
                        <div>
                            <label>Both</label>
                            <input checked type="radio" value="Both" name="filter_transmission">
                        </div>
                    </div>
                    <div>
                        <button type="submit">Confirm</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="product-container">

            <script src="product.js"></script>
            @foreach($products as $product)
{{--                <div class="product-card">--}}
{{--                    <div class="product-card-img">--}}
{{--                        <div>--}}
{{--                            <img width="640" height="240" src="{{asset("/images/cars/")}}/{{$product->image}}"--}}
{{--                                 alt="Car Image of {{$product->brand}} {{$product->model}}">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="product-card-desc">--}}
{{--                        <form action="/products/add" method="post">--}}
{{--                            @csrf--}}
{{--                            <input type="hidden" name="brand" value="{{$product->brand}}"/>--}}
{{--                            <input type="hidden" name="model" value="{{$product->model}}"/>--}}
{{--                            <input type="hidden" name="description" value="{{$product->description}}"/>--}}
{{--                            <input type="hidden" name="engineCapacity" value="{{$product->engine_capacity}}"/>--}}
{{--                            <input type="hidden" name="transmission" value="{{$product->transmission}}"/>--}}
{{--                            <input type="hidden" name="price" value="{{$product->price}}"/>--}}
{{--                            <input type="hidden" name="stock" value="{{$product->stock}}"/>--}}
{{--                            <input type="hidden" name="likes" value="{{$product->likes}}"/>--}}
{{--                            <input type="hidden" name="image" value="{{$product->image}}"/>--}}
{{--                            --}}{{-- Try not to remove the following lines below, holds backend (Ibrahim)--}}
{{--                            --}}{{-- Will attach to a HTML Form --}}
{{--                            --}}{{-- This should enumerate all product details here... --}}
{{--                            <h2 class="productTitle"><a--}}
{{--                                    href="{{route('product',$product->productsId)}}">{{$product->brand}} {{$product->model}}</a>--}}
{{--                            </h2>--}}
        <script>
            var passed =  <?php echo json_encode($products); ?>;
        </script>

            <div class="product-card">
                <div class="product-card-img">
                    <img width="640" height="300" src="{{asset("/images/cars/")}}/{{$product->image}}"
                         alt="Car Image of {{$product->brand}} {{$product->model}}">
                </div>
                <div class="product-card-desc">
                        <p id='display'></p>
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
                        {{-- Try not to remove the following lines below, holds backend (Ibrahim)--}}
                        {{-- Will attach to a HTML Form --}}
                        {{-- This should enumerate all product details here... --}}
                        <h2 class="productTitle"><a href="{{route('product',$product->productsId)}}">{{$product->brand}} {{$product->model}}</a></h2>

                            <h3>{{ $product->description }}</h3>
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
                            <a>
                                <button>Add review</button>
                            </a>
                        </form>
                        <form action="{{route('product', $product->productsId)}}" method="get">
                            <button type="submit">Go to Product</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    </body>
    </html>

@stop
