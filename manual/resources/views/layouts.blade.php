<!DOCTYPE html>
<html>
<!-- The dependencies for the website -->
<head>
    <script defer src='js/app.js'></script>
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <script src="https://kit.fontawesome.com/de8d7543d7.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="images/Logo.ico">
</head>
<body style="background-color: #F4D504;">
<!-- Boarder -->
  <div class="head-box">
    <!-- Logo -->
    <a href="/"><img src="images/Manual-logo.jpg" alt="top left"></img></a>
    <!-- Search bar -->
    <input id = search type="text" placeholder="Search..." name="search">
    <!-- User icon -->
    <a href='/login' class='user' ><i class="fa-regular fa-user"></i></a>
    <!-- Basket -->
    <a href="/checkout" class="basket">
      <!-- If basket is greater than 0 show badge -->
      <span><i class="fa-solid fa-basket-shopping"></i></span>
      <span class="badge" id="b"></span>
    </a>
  </div>

<!-- Nav bar -->
  <div class="rectangle">
    <a href="/products">Products</a>
    <a href="/">Home</a>
    <a href="/aboutus">About</a>
  </div>
<!-- The front page stock count -->
  <marquee>
    <ul>
      @foreach($products as $i)
      <li><a >{{$i->model}}: {{$i->stock}}</a></li>
      @endforeach
    </ul>
  </marquee>

</body>
</html>
