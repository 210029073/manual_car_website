<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/aboutus.css" type="text/css">
</head>

<body>

<header>
        <nav class="NavigationBar">
            <li class="nav-item">
                <a href="/homepage" class="navigationLinks">Home</a></div>
            </li>
            <ul class="Navigations">
            <li class="marginSpacing">
                    <a href="/products" class="navigationLinks">Cars</a></div>
                </li>
                <li class="marginSpacing">
                    <a href="/aboutus" class="navigationLinks">About Us</a></div>
                </li>
                <li class="marginSpacing">
                    <a href="/contactus" class="navigationLinks">Contact Us</a>
                </li>
                <li class="marginSpacing">
                <a href="{{route('basket')}}" class="navigationLinks">Basket</a>
                </li>
                @if(\Illuminate\Support\Facades\Auth::check())
                <li class="marginSpacing">
                <a href="{{route('pastOrder')}}"  class="navigationLinks">Past Order</a>
            </li>
            <li class="marginSpacing">
                <a href="{{route('logout')}}"  class="navigationLinks">Logout</a>
            </li>
            @else
            <li class="marginSpacing">
                <a href="{{route('signup')}}" class="navigationLinks">Sign Up</a>
            </li>
            <li class="marginSpacing">
                    <a href="{{route('loginPage')}}" class="navigationLinks">Login</a>
</li>
                
            @endif
        </a>
                

            </ul>
            <div class="responsiveNav">
                <span class="burgerIcon"></span>
                <span class="burgerIcon"></span>
                <span class="burgerIcon"></span>
                <span class="burgerIcon"></span>
            </div>
        </nav>
    </header>
    <script src="/js/nav.js"></script>
    <div class="sectionone">
        <img src="R.png" alt="">
    </div>
    <div class="firstsection">
        <div class="undersectionone">
            <h1>Introduction</h1>
            <p>Manual is a digital business which is built to help customers to be able to afford well functioning cars
                for
                cheaper.</p>
        </div>

        <div class="image1"><img src="/images/WPGif1.gif" alt=""></div>

    </div>

    <div class="secondsection">
        <div class="image2"><img src="/images/logos.png" alt=""></div>
        <div class="im1">
            <h1>Why Manual?</h1>
            <p>We source cars from all kinds of brands, on sale for cheaper than the market value! </p>
        </div>


    </div>

    <div class="secondsectionX">
        <div class="im1">
            <h1>Why Manual?</h1>
            <p>We source cars from all kinds of brands, on sale for cheaper than the market value! </p>
        </div>
        <div class="image2"><img src="/images/logos.png" alt=""></div>


    </div>



</body>

</html>