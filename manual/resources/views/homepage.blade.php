<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/homepage.css" type="text/css">
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
<div class="body1">
    <div class="WelcomeandBrowse">
        <h1>Welcome to Manual</h1>
        <div class="browseCarsBtn">
            <div><a href="{{route("products")}}">Browse Cars</a></div>
        </div>
    </div>
</div>
</body>
</html>

