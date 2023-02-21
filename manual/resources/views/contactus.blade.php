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
        <div class="navpadding"><a href="/products">Cars</a></div>
        <div class="navpadding"><a href="/aboutus">About Us</a></div>
        <div class="navpadding"><a href="/contactus">Contact Us</a></div>
    </div>
    <div class="Navigation Navigation-right">
        @if(\Illuminate\Support\Facades\Auth::check())
            <div class="signup"><a href="{{route('logout')}}">Logout</a></div>
        @else
            <div class="signup"><a href="{{route('signup')}}">Sign Up</a>
                <a href="{{route('loginPage')}}">Login</a>
            </div>
        @endif
    </div>
</div>
<div class="boxpush">
    <div class="imagebox"></div>
</div>

<div class="contactContainer"><h1>E-Mail:

    </h1>
    <h3>200070104@aston.ac.uk</h3></div>
</div>

<div class="contactContainer1"><h1>Github:</h1>

    <h3>https://github.com/210029073/manual_car_website</h3>
</div>

<div class="contactContainer2"><h1>Location:</h1>
    <h3>Aston St, Birmingham B4 7ET</h3>
</div>
</body>
</html>

