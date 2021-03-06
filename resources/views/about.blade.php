@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        @auth
    <link href=	"{{ URL::asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"
	    <link href="{{ URL::asset('assets/css/app.css') }}" rel="stylesheet"
		 <script src=	"{{ URL::asset('assets/bootstrap/js/bootstrap.bundle.min.js') }}"</script>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="{{ asset('css/style.css') }}" rel="stylesheet">
<html lang="en" dir="ltr">
  <head>

 
  
 <form align="center">
    <body>
      <h2>Smiley Food Order & Delivery</h2>
     
      <div class="container", style="margin-left:auto;margin-right:auto;">

    <h1 >ABOUT US</h1>
   



<img src="{{ URL::asset('images/smiley.jpg') }}"  width="280" height="172">
    <br>
    <br>

      <h2>Our Mission</h2>
      <p><b>Creating a very good environment of the food delivery is our sole purpose to be the best food delivery in the country </p></b>
      <p><b>Ensuring a high quality service is our most priority with a great deal of promos and affordable prices.</p></b>

      <h2>Our Vision</h2>
      <p><b>Aims for excellence at being the best, consistent and most reliable in the city for needs pertaining hunger.</p></b>
      <p><b>Wide spread offering of diet conscious dishes, prompt delivery, hygienic and eco-friendly packaging are our precedence.</p></b>
      <br><br>
      <h2><b>Have a problem?</h2></b>

      <a href="/report" class="button">Tell Us</a>

    </div>


       </button>

  </form>
  </body>
  </html>

    @endauth 
        @guest
        <h1>Welcome to Smiley Food Order & Delivery! </h1>
        <p class="lead">You are currently viewing the home page. Please login or create an account to access more features.</p>
        @endguest
    </div>
@endsection
