@extends('layouts')
@section('title','Products')
@section('content')
    <body>
    <h1> Car Products</h1>

    <div class="filter-container">
      <button id="filter-all" class="filter-button active">All Products</button>
      <button id="filter-sedan" class="filter-button">Sedans</button>
      <button id="filter-suv" class="filter-button">SUVs</button>
      <button id="filter-truck" class="filter-button">Trucks</button>
    </div>

    <div class="product-container">
        <div class="product-card">
            <img
                src="https://www.google.co.uk/search?q=rs3+audi&tbm=isch&ved=2ahUKEwiIurPvoJj9AhV1nCcCHbc-C8sQ2-cCegQIABAA&oq=RS3&gs_lcp=CgNpbWcQARgBMgQIIxAnMggIABCABBCxAzIFCAAQgAQyBQgAEIAEMgQIABBDMgQIABBDMgUIABCABDIECAAQQzIFCAAQgAQyBQgAEIAEUABYAGCkEmgAcAB4AIABR4gBR5IBATGYAQCqAQtnd3Mtd2l6LWltZ8ABAQ&sclient=img&ei=2jHtY4hl9biewQ-3_azYDA&bih=736&biw=767#imgrc=q1Nyi9VzQ8pOYM"
                alt="Product 1">
            <h3> Audi RS3</h3>
            <p> The new Audi RS 3 offers driving dynamics on the highest level and optimum values in its segment. With a
                400-hp five-cylinder engine that generates 500 Nm of torque, the car ensures quick acceleration and highly
                emotional sound. This is the first Audi ever to include the RS torque splitter, which variably distributes
                the torque between the rear wheels.</p>
            <div class="product-details">
                <ul>
                    <li><strong>Price:</strong> £51,780</li>
                    <li><strong>Color options:</strong> Black, White, Nardo Gray</li>
                    <ul>
                        <li>Engine: 2.5 L, 5-cylinder</li>
                        <li>Horsepower: 395 bhp</li>
                        <li>Torque: 369 lb-ft</li>
                        <li>Transmission: Automatic</li>
                    </ul>
                </ul>
            </div>
            <div class="product-reviews">
                <h4> Customer Reviews</h4>
                <ul>
                    <li>
                        <div class="Review-Rating Fantastic">5</div>
                        <span> This car is excellent, beautiful and it has great performance.</span>
                    </li>
                    <li>
                        <div class="review-rating good">4</div>
                        <span> I've had this car for nearly a year now and it's still fun and going strong but it keeps drinking a lot of petrol....IM BROKEE haha"</span>
                    </li>
                    <li>
                        <div class="review-rating alright">3</div>
                        <span> This car is decent compared to my other cars, but it kept coming with a few faults that needed repairing"</span>
                    </li>
                    <li>
                        <div class="review-rating poor">2</div>
                        <span> I wouldn't recommend this car to anyone, a lot of elctrical problems and it isn't reliable in the slightest"</span>
                    </li>
                </ul>
            </div>
            <button>Add to Cart</button>
            <a><button>Add review</button></a>
        </div>
        <div class="product-card">
            <img
                src="https://www.google.co.uk/url?sa=i&url=https%3A%2F%2Fwww.auto-data.net%2Fen%2Fbmw-5-series-sedan-g30-lci-facelift-2020-530i-252hp-mhev-steptronic-40122&psig=AOvVaw1efrC_EckASBtflzZWpj1u&ust=1676577779074000&source=images&cd=vfe&ved=0CA8QjRxqFwoTCKD5wYmpmP0CFQAAAAAdAAAAABAEalt="
                alt="Product 2">
            <h3> BMW 530i</h3>
            <p> The BMW 5 Series continues the concept of the “New Class”: dynamic vehicles in a modern design, equipped
                with technological innovations, powerful engines and comfort features from the luxury class.</p>
            <div class="product-details">
                <ul>
                    <li><strong>Price:</strong> £54,000</li>
                    <li><strong>Color options:</strong> Black, White, Blue</li>
                    <ul>
                        <li>Engine: 2.0 L, 4-cylinder</li>
                        <li>Horsepower: 248 bhp</li>
                        <li>Torque: 257 lb-ft</li>
                        <li>Transmission: Automatic</li>
                    </ul>
                </ul>
            </div>
            <div class="product-reviews">
                <h4> Customer Reviews</h4>
                <ul>
                    <li>
                        <div class="Review-Rating Fantastic">5</div>
                        <span> This car is a Fantastic sedan that is smooth and powerful and it is luxurious.</span>
                    </li>
                    <li>
                        <div class="review-rating good">4</div>
                        <span>This car is well rounded with sharp handling while also being fuel efficient</span>
                    </li>
                    <li>
                        <div class="review-rating alright">3</div>
                        <span> The drive can be a bit firm and the materials don't feel as high quality.</span>
                    </li>
                    <li>
                        <div class="review-rating poor">2</div>
                        <span> Not very reliable and the car design is like it is uninspired</span>
                    </li>
                </ul>
            </div>
            <button>Add to Cart</button>
            <a><button>Add review</button></a>
        </div>
        <div class="product-card">
            <img
                src="https://www.google.co.uk/url?sa=i&url=https%3A%2F%2Fwww.carsguide.com.au%2Fcar-reviews%2Fmercedes-amg-a-45-s-78781&psig=AOvVaw1NsB2ThviWpfvp1FAIpv1f&ust=1676578730511000&source=images&cd=vfe&ved=0CA8QjRxqFwoTCJCyos-smP0CFQAAAAAdAAAAABAJ"
                alt="Product 3">
            <h3> Mercedes A45s</h3>
            <p> The Mercedes-AMG A 45 S Hatchback brings racing performance to the road in a compact yet elegant form.
                Exclusive features such as the Real Performance Sound and the turbo engine make the A 45 S the ideal partner
                for everyday driving.</p>
            <div class="product-details">
                <ul>
                    <li><strong>Price:</strong> £49,240</li>
                    <li><strong>Color options:</strong> Black, White, Yellow</li>
                    <ul>
                        <li>Engine: 2.0 L, 4-cylinder</li>
                        <li>Horsepower: 415 bhp</li>
                        <li>Torque: 500 lb-ft</li>
                        <li>Transmission: Automatic</li>
                    </ul>
                </ul>
            </div>
            <div class="product-reviews">
                <h4> Customer Reviews</h4>
                <ul>
                    <li>
                        <div class="Review-Rating Fantastic">5</div>
                        <span> This car is soo funn and the luxurious interior is to die for.</span>
                    </li>
                    <li>
                        <div class="review-rating good">4</div>
                        <span> Well rounded hot hatch that has impressive performance and practicallity</span>
                    </li>
                    <li>
                        <div class="review-rating alright">3</div>
                        <span> The exterior styling could be better as it looks like an A35s.</span>
                    </li>
                    <li>
                        <div class="review-rating poor">2</div>
                        <span> Very poor fuel efficiency and the infoitainment system can be heaches to use.</span>
                    </li>
                </ul>
            </div>
            <button>Add to Cart</button>
            <a><button>Add review</button></a>
        </div>

        <script src="product.js"></script>
</body>
</html>
        <div>
            @foreach($products as $product)
            <div class="product-item">
                <form action="/products/add" method="post">
                    @csrf
                    <input type="hidden" name="brand" value="{{$product->brand}}"/>
                    <input type="hidden" name="model" value="{{$product->model}}"/>
                    <input type="hidden" name="description" value="{{$product->description}}"/>
                    <input type="hidden" name="engineCapacity" value="{{$product->engine_capacity}}"/>
                    <input type="hidden" name="transmission" value="{{$product->transmission}}" />
                    <input type="hidden" name="price" value="{{$product->price}}"/>
                    <input type="hidden" name="stock" value="{{$product->stock}}"/>
                    <input type="hidden" name="likes" value="{{$product->likes}}"/>
                    <input type="hidden" name="image" value="{{$product->image}}"/>
                    <div>
                        {{-- Try not to remove the following lines below, holds backend (Ibrahim)--}}
                        {{-- Will attach to a HTML Form --}}
                        {{-- This should enumerate all product details here... --}}
                        <h2>{{$product->brand}} {{$product->model}}</h2>
                        <img width="640" height="426" src="{{asset("/images/cars/")}}/{{$product->image}}" alt="Car Image of {{$product->brand}} {{$product->model}}">
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
                        <a><button>Add review</button></a>
                    </div>
                </form>
            </div>
            @endforeach
        </div>
    </div>
@stop
