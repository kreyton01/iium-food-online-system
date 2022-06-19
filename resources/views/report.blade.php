@extends('layouts.app-master')
       
@section('content')
    <div class="bg-light p-5 rounded">
        @auth
        <link href="{{ URL::asset('js/scrollTo.js') }}" rel="script">
		<link href="{{ URL::asset('js/report.js') }}" rel="script">
<link href="{{ URL::asset('css/smileyHome.css') }}" rel="stylesheet">
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


</head>
<body>



<!-- 	 <img src="{{ URL::asset('images/pancake.jpg') }}" style="width:20%"> -->
<div class="container">
  <div style="text-align:center width="500px"">
    <h2>Smiley Food Order & Delivery</h2>

	<h2>Contact Us</h2>
	
    <p>Leave us a message:</p>
  </div>
  <div class="row">
    <div class="row">
     
    </div>
    <div class="row" >
      <form action="/report" method="post" name ="myForm" onsubmit="return validateForm()" style="width:400px"; >
	  @CSRF
        <div class ="form-shape">
          <label for="query">
            Type of Query
          </label><br>

          <select style="width:400px" name="myQuery" id="query" >
            <option value ="sel" selected>
              Select
            </option>
            <option Required value="ord">
              Order related issues
            </option>
            <option Required value="Site">
              Site related issues
            </option>
            <option Required value="fed">
              Complaint related Issues
            </option>
            <option Required value="others">
              Others
            </option>
          </select>
        </div><br>

        <div>
        <label for="name">First Name</label><br>
        <input type="text" style="width:400px" id="fname" name="firstname" placeholder="Your name.." Required> <br><br>
        </div>
        <div>
        <label for="lname">Last Name</label><br>
        <input type="text" style="width:400px" id="lname" name="lastname" placeholder="Your last name.." Required><br><br>
        </div>
        <div>
        <label for="email">E-mail</label><br>
        <input type="text" style="width:400px" id="email" name="email" placeholder="Your e-mail.." Required><br><br>
        </div>
        <div>
        <label for="subject">Subject</label><br>
        <textarea id="subject" style="width:400px" style="height:400px" name="subject" placeholder="Elaborate your query.." Required style="height:170px"></textarea><br><br>
        </div>
        <div class="button">
            <input type="submit" value="Submit">
            <input type="reset" value="Reset" class="button">
        </div>
      </div>
      </form>

    </div>
  </div>
</div>
</body>
</html>
  
 @endauth 
        @guest
        <h1>Welcome to Smiley Food Order & Delivery! </h1>
        <p class="lead">You are currently viewing the home page. Please login or create an account to access more features.</p>
        @endguest
    </div>
@endsection
