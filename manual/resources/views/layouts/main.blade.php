<!DOCTYPE html>
<html>
<!-- The dependencies for the website -->
<head>
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
    <div class='content-container'>
      @yield('content')
    </div>
    <footer>
        <div>
            <p>Created by Team 21. All Rights Reserved.</p>
            <div class="footer-box-container">
                <div class="footer-boxer" >
                    <h2>Reach out to us:</h2>
                    <p>E-Mail: 200070104@aston.ac.uk</p>
                    <h3></h3>
                    <p>GitHub Repository: <a href="https://github.com/210029073/manual_car_website/"> Click Here!</a></p>
                </div>
                <div class="footer-boxer" >
                    <h2>Come And Visit Us:</h2>
                    <p>Aston St, Birmingham B4 7ET</p>
                </div>
                <div class="footer-boxer">
                    <h2>Contributors</h2>
                    <p>Ibrahim Ahmad (210029073)</p>
                    <p>Ahsaan Kumar (200070104)</p>
                    <p>Sydul Bari (210180190)</p>
                    <p>Amir Khan (210056172)</p>
                    <p>Jacques Winmill (210063170)</p>
                    <p>Victory Mpokosa (200174572)</p>
                    <p>Sachin Kumar (220253114)</p>
                    <p>Mohammed Ali (210132948)</p>
                </div>
            </div>
        </div>
    </footer>
  <script src="/js/nav.js"></script>
  <script defer src='/js/app.js'></script>
  </body>
</html>
