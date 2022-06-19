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


<body>
    <?php
         header( "refresh:5;url=/" );

    ?>
    <form align="center">

      <h2>Smiley Food Order & Delivery</h2>

        <div class="container", style="margin-left:auto;margin-right:auto;">
            <br><br>
            <p><b>Thank you so much for using our service!</b></p>
            <br>
            <p>You will be automatically redirected to the home page in 5 seconds...</p>

        </div>
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
