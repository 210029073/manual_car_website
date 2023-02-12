<!DOCTYPE html>
<html>
<head>
    <script defer src='js/app.js'></script>
    <link rel="stylesheet" type="text/css" href="css/home.css">
</head>
<body style="background-color: #F4D504;">

  <div class="head-box">
    <a href="/"><img src="images/Manual-logo.jpg" alt="top left"></img></a>
    <input id = search type="text" placeholder="Search..." name="search"> 
  </div>

<!-- Nav bar -->
  <div class="rectangle">
    <p>Products</p>
    <p>Home</p>
    <p>About</p>
  </div>
  <marquee>                
    <ul>
      @foreach($products as $i)
      <li><a >{{$i->model}}: {{$i->stock}}</a></li>
      @endforeach
    </ul>
  </marquee>
</body>
</html>