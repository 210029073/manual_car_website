<!DOCTYPE html>
<html>
<!-- The dependencies for the website -->
<head>
    <script defer src='/js/app.js'></script>
    <link rel="stylesheet" type="text/css" href="/css/home.css">
{{--    <script src="https://kit.fontawesome.com/de8d7543d7.js" crossorigin="anonymous"></script>--}}
    <link rel="icon" type="image/x-icon" href="/images/Logo.ico">
    <title> Manual Do It Yourself - @yield('title')</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
  <body>
  <header>
        <nav class="NavigationBar">
            <li class="marginSpacing">
                

                <div class="CS">
                    <a href="/homepage" class="navigationLinks"><img  class="nav" src="/images/ManualNav.png"  ></a></div>
                </div>
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
    <div class='content-container'>
      @yield('content')
    </div>
    <footer>
        <div>
            <div>
                <p>Created by Team 21. All Rights Reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>
