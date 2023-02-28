<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/aboutus.css" type="text/css">
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
<div class="aboutus2">
    <div class="boxer2"></div>
</div>

<div class="AboutUsText">
    <h1>About Us</h1></div>

<div class="AboutUs">

    <div class="boxer">
        <h1>Introduction</h1>
        <h2>Manual is a digital business which is built to help customers to be able to afford well functioning cars for
            cheaper.</h2></div>
</div>
</div>

<div class="AboutUs1">
    <div class="boxer1"><h1>How to Buy</h1>
        <h2>In order to buy from Manual, you will have to create an Account. After creating the Account, you will then
            log into that Account and browse Cars that we have available for you to buy.</h2></div>
</div>
</div>
</body>
</html>

