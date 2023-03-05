@extends('layouts')
<head>
    <link rel="stylesheet" type="text/css" href="/css/Products.css">
</head>
@section('title','Products')
@section('content')
    <body>
    @if(session()->has('successAddProduct'))
        <div class="success-popup">
            <h4>{{session()->get('successAddProduct')}}</h4>
        </div>
    @endif
    <h1>Cars for sale</h1>
    <div class="filter-container" style="position: relative;margin-top:2%;margin-bottom: 2%">
{{--        <button1 id="filter-all" class="filter-button active">All Products</button1>--}}
{{--        <button1 id="filter-sedan" class="filter-button">Sedans</button1>--}}
{{--        <button1 id="filter-suv" class="filter-button">SUVs</button1>--}}
{{--        <button1 id="filter-truck" class="filter-button">Trucks</button1>--}}
        <form action="{{route("browse_products")}}" method="get">
            <input type="radio" value="Manual" name="filter_transmission">
            <label>Manual</label>
            <input type="radio" value="Automatic" name="filter_transmission">
            <label>Automatic</label>
            <button type="submit">Confirm</button>
        </form>
    </div>

    <div class="product-container">
{{--        <div class="product-card">--}}
{{--            <div class="product-card-img">--}}
{{--                <img--}}
{{--                    src="https://www.autocar.co.uk/sites/autocar.co.uk/files/styles/gallery_slide/public/1-audi-rs3-2021-first-drive-review-hero-front.jpg?itok=5e7DR7cs"--}}
{{--                    alt="Product 1">--}}
{{--            </div>--}}

{{--            <div class="product-card-desc">--}}
{{--                <div>--}}
{{--                    <h3> Audi RS3</h3>--}}
{{--                    <p> The new Audi RS 3 offers driving dynamics on the highest level and optimum values in its--}}
{{--                        segment. With a--}}
{{--                        400-hp five-cylinder engine that generates 500 Nm of torque, the car ensures quick acceleration--}}
{{--                        and highly--}}
{{--                        emotional sound. This is the first Audi ever to include the RS torque splitter, which variably--}}
{{--                        distributes--}}
{{--                        the torque between the rear wheels.</p>--}}
{{--                    <div class="product-details">--}}
{{--                        <ul>--}}
{{--                            <li><strong>Price:</strong> £51,780</li>--}}
{{--                            <li><strong>Color options:</strong> Black, White, Nardo Gray</li>--}}
{{--                            <ul>--}}
{{--                                <li>Engine: 2.5 L, 5-cylinder</li>--}}
{{--                                <li>Horsepower: 395 bhp</li>--}}
{{--                                <li>Torque: 369 lb-ft</li>--}}
{{--                                <li>Transmission: Automatic</li>--}}
{{--                            </ul>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
            {{--            <div class="product-reviews">--}}
            {{--                <h4> Customer Reviews</h4>--}}
            {{--                <ul>--}}
            {{--                    <li>--}}
            {{--                        <div class="Review-Rating Fantastic">5</div>--}}
            {{--                        <span> This car is excellent, beautiful and it has great performance.</span>--}}
            {{--                    </li>--}}
            {{--                    <li>--}}
            {{--                        <div class="review-rating good">4</div>--}}
            {{--                        <span> I've had this car for nearly a year now and it's still fun and going strong but it keeps drinking a lot of petrol....IM BROKEE haha"</span>--}}
            {{--                    </li>--}}
            {{--                    <li>--}}
            {{--                        <div class="review-rating alright">3</div>--}}
            {{--                        <span> This car is decent compared to my other cars, but it kept coming with a few faults that needed repairing"</span>--}}
            {{--                    </li>--}}
            {{--                    <li>--}}
            {{--                        <div class="review-rating poor">2</div>--}}
            {{--                        <span> I wouldn't recommend this car to anyone, a lot of elctrical problems and it isn't reliable in the slightest"</span>--}}
            {{--                    </li>--}}
            {{--                </ul>--}}
            {{--            </div>--}}
{{--            <button>Add to Cart</button>--}}
{{--            <a>--}}
{{--                <button>Add review</button>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <div class="product-card">--}}
{{--            <div class="product-card-img">--}}
{{--                <img--}}
{{--                    src="https://www.cnet.com/a/img/resize/b395d1e8321e3fa68c10a6fee171d77ed1bd535c/hub/2017/03/23/a9971f89-d80a-4d8f-8b07-692d2d5af046/2017bmw530i-07406.jpg?auto=webp&fit=crop&height=675&width=1200"--}}
{{--                    alt="Product 2">--}}
{{--            </div>--}}
{{--            <div class="product-card-desc">--}}
{{--                <h3> BMW 530i</h3>--}}
{{--                <p> The BMW 5 Series continues the concept of the “New Class”: dynamic vehicles in a modern design,--}}
{{--                    equipped--}}
{{--                    with technological innovations, powerful engines and comfort features from the luxury class.</p>--}}
{{--                <div class="product-details">--}}
{{--                    <ul>--}}
{{--                        <li><strong>Price:</strong> £54,000</li>--}}
{{--                        <li><strong>Color options:</strong> Black, White, Blue</li>--}}
{{--                        <ul>--}}
{{--                            <li>Engine: 2.0 L, 4-cylinder</li>--}}
{{--                            <li>Horsepower: 248 bhp</li>--}}
{{--                            <li>Torque: 257 lb-ft</li>--}}
{{--                            <li>Transmission: Automatic</li>--}}
{{--                        </ul>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
            {{--            <div class="product-reviews">--}}
            {{--                <h4> Customer Reviews</h4>--}}
            {{--                <ul>--}}
            {{--                    <li>--}}
            {{--                        <div class="Review-Rating Fantastic">5</div>--}}
            {{--                        <span> This car is a Fantastic sedan that is smooth and powerful and it is luxurious.</span>--}}
            {{--                    </li>--}}
            {{--                    <li>--}}
            {{--                        <div class="review-rating good">4</div>--}}
            {{--                        <span>This car is well rounded with sharp handling while also being fuel efficient</span>--}}
            {{--                    </li>--}}
            {{--                    <li>--}}
            {{--                        <div class="review-rating alright">3</div>--}}
            {{--                        <span> The drive can be a bit firm and the materials don't feel as high quality.</span>--}}
            {{--                    </li>--}}
            {{--                    <li>--}}
            {{--                        <div class="review-rating poor">2</div>--}}
            {{--                        <span> Not very reliable and the car design is like it is uninspired</span>--}}
            {{--                    </li>--}}
            {{--                </ul>--}}
            {{--            </div>--}}
{{--            <button>Add to Cart</button>--}}
{{--            <a>--}}
{{--                <button>Add review</button>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <div class="product-card">--}}
{{--            <div class="product-card-img"><img--}}
{{--                    src="https://hips.hearstapps.com/roa.h-cdn.co/assets/16/06/1455124039-merc.jpg"--}}
{{--                    alt="Product 3"></div>--}}
{{--            <div class="product-card-desc">--}}
{{--                <h3>Mercedes A45s</h3>--}}
{{--                <p> The Mercedes-AMG A 45 S Hatchback brings racing performance to the road in a compact yet elegant--}}
{{--                    form.--}}
{{--                    Exclusive features such as the Real Performance Sound and the turbo engine make the A 45 S the ideal--}}
{{--                    partner--}}
{{--                    for everyday driving.</p>--}}
{{--                <div class="product-details">--}}
{{--                    <ul>--}}
{{--                        <li><strong>Price:</strong> £49,240</li>--}}
{{--                        <li><strong>Color options:</strong> Black, White, Yellow</li>--}}
{{--                        <ul>--}}
{{--                            <li>Engine: 2.0 L, 4-cylinder</li>--}}
{{--                            <li>Horsepower: 415 bhp</li>--}}
{{--                            <li>Torque: 500 lb-ft</li>--}}
{{--                            <li>Transmission: Automatic</li>--}}
{{--                        </ul>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
            {{--            <div class="product-reviews">--}}
            {{--                <h4> Customer Reviews</h4>--}}
            {{--                <ul>--}}
            {{--                    <li>--}}
            {{--                        <div class="Review-Rating Fantastic">5</div>--}}
            {{--                        <span> This car is soo funn and the luxurious interior is to die for.</span>--}}
            {{--                    </li>--}}
            {{--                    <li>--}}
            {{--                        <div class="review-rating good">4</div>--}}
            {{--                        <span> Well rounded hot hatch that has impressive performance and practicallity</span>--}}
            {{--                    </li>--}}
            {{--                    <li>--}}
            {{--                        <div class="review-rating alright">3</div>--}}
            {{--                        <span> The exterior styling could be better as it looks like an A35s.</span>--}}
            {{--                    </li>--}}
            {{--                    <li>--}}
            {{--                        <div class="review-rating poor">2</div>--}}
            {{--                        <span> Very poor fuel efficiency and the infoitainment system can be heaches to use.</span>--}}
            {{--                    </li>--}}
            {{--                </ul>--}}
            {{--            </div>--}}
{{--            <button>Add to Cart</button>--}}
{{--            <a>--}}
{{--                <button>Add review</button>--}}
{{--            </a>--}}
{{--        </div>--}}

        <script src="product.js"></script>
        @foreach($products as $product)
            <div class="product-card">
                <div class="product-card-img">
                    <div>
                        <img width="640" height="240" src="{{asset("/images/cars/")}}/{{$product->image}}"
                         alt="Car Image of {{$product->brand}} {{$product->model}}">
                    </div>
                </div>
                <div class="product-card-desc">
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
    </body>
    </html>

@stop
