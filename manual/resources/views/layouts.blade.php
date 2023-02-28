<!DOCTYPE html>
<html>
<!-- The dependencies for the website -->
<head>
    <script defer src='/js/app.js'></script>
    <link rel="stylesheet" type="text/css" href="/css/home.css">
    <script src="https://kit.fontawesome.com/de8d7543d7.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="/images/Logo.ico">
    <title> Manual Do It Yourself - @yield('title')</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
  <body>
    <div class="Navigation">
        <div class="Navigation Navigation-left">
            <a class="current" href="/homepage">Home</a>
        </div>
        <div class="Navigation Navigation-center">
            <div class="navpadding" ><a href="/products">Cars</a></div>
            <div class="navpadding"><a href="/aboutus">About Us</a></div>
            <div class="navpadding"> <a href="/contactus">Contact Us</a></div>
            <div class="signup"><a href="{{route('basket')}}">Basket</a></div>
        </div>
        <div class="Navigation Navigation-right">
            @if(\Illuminate\Support\Facades\Auth::check())
                <div class="signup"><a href="{{route('pastOrder')}}">Past Order</a></div>
                <div class="signup"><a href="{{route('logout')}}">Logout</a></div>
            @else
                <div class="signup"> <a href="{{route('signup')}}">Sign Up</a>
                    <a href="{{route('loginPage')}}">Login</a>
                </div>
            @endif
        </div>
    </div>

    <div class='content-container'>
      @yield('content')
    </div>

</body>
</html>
