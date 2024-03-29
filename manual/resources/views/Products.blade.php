@extends('layouts.main')
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
    @if(session()->has('successCheckout'))
        <div class="success-popup">
            <h4>{{session()->get('successCheckout')}}</h4>
        </div>
    @endif
    <div style="display: flex; justify-content: space-around; padding: 1rem">
        <h1>Cars for sale</h1>
    </div>
    <div class="filter-container-mobile">
        <div class="filter-container-mobile-form">
            <form action="{{route("browse_products")}}" method="get">
                <div class="filter-container-mobile-form-groups">
                    <div>
                        <div>
                            <label>Select by Car Brand:</label>
                        </div>
                        <div>
                            <select name="cars">
                                <option>All Cars</option>
                                <?php
                                    use \App\Http\Controllers\ProductFilterController;
                                    $productFilterMob = new ProductFilterController();
                                ?>
                                @foreach($productFilterMob->getCarBrand() as $item)
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
                                <br/>
                                <input min="0" value="0" type="number" name="fromNum"/>
                            </div>
                            <div>
                                <label>To</label>
                                <br/>
                                <input min="0"  value="0" type="number" name="toNum">
                            </div>
                        </div>
                    </div>
                    <div class="filter-transmission-mobile">
                        <div>
                            <label>Select a car transmission:</label>
                        </div>
                        <div class="filter-transmission-mobile-types">
                            <div>
                                <div>
                                    <label>Manual</label>
                                </div>
                                <div>
                                    <input type="radio" value="Manual" name="filter_transmission">
                                </div>
                            </div>
                            <div>
                                <div>
                                    <label>Automatic</label>
                                </div>
                                <div>
                                    <input type="radio" value="Automatic" name="filter_transmission">
                                </div>
                            </div>
                            <div>
                                <div>
                                    <label>Both</label>
                                </div>
                                <div>
                                    <input checked type="radio" value="Both" name="filter_transmission">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <button type="submit">Confirm</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="products-ui-wrapper">
        <div class="filter-container">
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
//                                use \App\Http\Controllers\ProductFilterController;
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
                                <br/>
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
                        <div>
                            <label>Select a car transmission:</label>
                        </div>
                        <div>
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
               <div class="product-card">
                    <div class="product-card-img">
                        <a href="{{route('product',$product->productsId)}}">
                            <img width="640" height="300" src="{{asset('/images/cars/')}}/{{$product->image}}"
                                 alt="Car Image of {{$product->brand}} {{$product->model}}">
                        </a>
                    </div>
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

                           <div class="productDesc">
                               <h2 class="productTitle"><a href="{{route('product',$product->productsId)}}">{{$product->brand}} {{$product->model}}</a></h2>
                               {{-- Parse price --}}
                               <p class="first"><strong>Price:</strong> £{{ number_format($product->price, 2, '.') }}</p>
                               <p class="first"><strong>Popularity:</strong> {{$product-> likes}}</p>
                           </div>

                           <div class="product-btn">
                               @if($product->stock > 0)
                                   <button type="submit">Add to cart</button>
                               @else
                                   <p>Out of stock!</p>
                               @endif
                           </div>
                       </form>
                       <form action="/products/rating" method="post">
                            @csrf
                            <div class="product-btn">
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
               </div>
            @endforeach
        </div>
    </div>
</body>
@stop
