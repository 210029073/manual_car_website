<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/contactus.css" type="text/css">
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
    <!-- <img src="/images/.png" position="left:50px;"> -->
</div>
<div class="AboutUsTEST">
    <div class="boxer">
        <div class="h4box"><h1>Contact us Via:</h1>
        <h4>E-Mail: 200070104@aston.ac.uk</h4>
        <h4>Number: +44 7474 142552</h4>
        <h4>Location: Aston St, Birmingham B4 7ET </h4></div>
        <div class="img-container">
</div>
</div>

<div class="AboutUsTEST">
<div class="boxer">
        <div class="h4box"><h1>Contact us Via:</h1>
        <h4>E-Mail: 200070104@aston.ac.uk</h4>
        <h4>Number: +44 7474 142552</h4>
        <h4>Location: Aston St, Birmingham B4 7ET </h4></div>
        <div class="img-container">
    <div class="boxer">
        <div class="h4box"><h1>Contact us Via:</h1>
        <h4>E-Mail: 200070104@aston.ac.uk</h4>
        <h4>Number: +44 7474 142552</h4>
        <h4>Location: Aston St, Birmingham B4 7ET </h4></div>
        <div class="img-container">
</div>
</div>

</body>
</html>