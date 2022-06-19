@extends('layouts.app-master')

@section('content')


    <div class=" p-5 rounded">
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

 <link rel="icon" href="{{ url::asset('images/logo.png') }}">
<html lang="en">
<head>
  <title>Thank you!</title>
  <link rel="stylesheet" href="thanks.css">

  <style>
  body {
  background-image: url('thankyou.gif');
  background-size: 1000px 600px;
  background-attachment: fixed;
  height: 1000px;
  background-position: center;
  font-family: 'Montserrat', sans-serif;
}

  </style>

</head>
<body>

</div>

 <h5> We got your message and our team is on it! Expect to hear from one of</h5>
 <h5>our members very soon..</h5>
 
 
 <?php
  header( "refresh:5;url=/" );

?>

<h5> You'll be redirected in about 5 seconds. If not, click <a href="/" class=active>here</a>. </h5>

</body>
</html>
  
 @endauth 
        @guest
        <h1>Welcome to Smiley Food Order & Delivery! </h1>
        <p class="lead">You are currently viewing the home page. Please login or create an account to access more features.</p>
        @endguest
    </div>
@endsection
