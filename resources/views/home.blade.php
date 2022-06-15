
<!DOCTYPE html>


<link href="{{ URL::asset('js/scrollTo.js') }}" rel="script">
<link href="{{ URL::asset('css/smileyHome.css') }}" rel="stylesheet">


<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">
    <title>HOME - Welcome to Smiley Food Order & Delivery</title>
  </head>
  <body>

  <div class="top-site" style="width:100%" align="center">

    <div class="top-site-child description" style="width:100%" align="center">

      <h2>Welcome to Smiley Food Order & Delivery</h2>
      <p>
        This page is created by the students of IIUM Gombak in Order
    <br>to help the people who are hungry but do not have the time to
    <br>order and deliver the food the them safely as soon as possible.
    </p>

    </div>

  </div>
  <br><br>

  <div class="topnav">
    <a class="active" href="#home">Homepage</a>
    <a href="/order" class="nav-link">Order</a>
    <a href="/menu"class="nav-link">Menu</a>
    <a href="/payment"class="nav-link">Payment</a>
    <a href="/login"class="nav-link">Login</a>
  </div>

  <div class="foodpic">

    <div class="foodpic-child">
      <img src="{{ URL::asset('images/nasi-lemak.jpeg') }}" style="width:100%">
    </div>
    <div class="foodpic-child">
      <img src="{{ URL::asset('images/nasi-ayam.jpeg') }}" style="width:100%">
    </div>

  </div>

  </body>
</html>
