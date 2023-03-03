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

<div class="topbackimage">
    <img src="/images/R.png" position="left:50px;">
</div>
<div class="AboutUsTEST">
    <div class="boxer">
        <div class="h4box"><h1>Introduction</h1>
        <h4>Manual is a digital business which is built to help customers to be able to afford well functioning cars for
            cheaper.</h4></div>
        <div class="img-container">
            <img src="/images/WPGif1.gif">
</div>
</div>

<div class="AboutUs1">
    <div class="boxer1">
        <img src="/images/WPGif1.gif">
        <div class="img-container">
            <div class="h4box"><h1>How to Buy</h1>
            <h4>In order to buy from Manual, you will have to create an Account. After creating the Account, you will then
                
                log into that Account and browse Cars that we have available for you to buy.</h4></div>
</div>
</div>
</body>
</html>

