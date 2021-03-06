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

 <link rel="icon" href="{{ url::asset('images/logo.png') }}">
  

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



  <div class="foodpic">

    <div class="foodpic-child">
      <img src="{{ URL::asset('images/nasi-lemak.jpeg') }}" style="width:100%">
    </div>
  

  </div>

    @endauth 
        @guest
        <h1>Welcome to Smiley Food Order & Delivery! </h1>
        <p class="lead">You are currently viewing the home page. Please login or create an account to access more features.</p>
        @endguest
    </div>
@endsection
