@extends('layouts.app-master')
       
@section('content')
    <div class="bg-light p-5 rounded">
        @auth
        <link href="{{ URL::asset('js/scrollTo.js') }}" rel="script">
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



  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>


  * {
    box-sizing: border-box;
  }

  .row {
    display: -ms-flexbox; /* IE10 */
    display: flex;
    -ms-flex-wrap: wrap; /* IE10 */
    flex-wrap: wrap;
    margin: 0 -16px;
  }

  .col-25 {
    -ms-flex: 25%; /* IE10 */
    flex: 25%;
  }

  .col-50 {
    -ms-flex: 50%; /* IE10 */
    flex: 50%;
  }

  .col-75 {
    -ms-flex: 75%; /* IE10 */
    flex: 75%;
  }

  .col-25,
  .col-50,
  .col-75 {
    padding: 0 16px;
  }



  input[type=text] {
    width: 100%;
    margin-bottom: 20px;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 3px;
  }

  label {
    margin-bottom: 10px;
    display: block;
  }

  .icon-container {
    margin-bottom: 20px;
    padding: 7px 0;
    font-size: 24px;
  }

 




  hr {
    border: 1px solid lightgrey;
  }

  span.price {
    float: right;
    color: grey;
  }

  /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
  @media (max-width: 800px) {
    .row {
      flex-direction: column-reverse;
    }
    .col-25 {
      margin-bottom: 20px;
    }
  }
  </style>

  
<h2>Payment Form</h2>

  <div>
  
  </div>
  <div class="row">
    <div class="col-75">
	
	
      <div class="container">
        <form action="/action_page.php">

          <div class="row">
            <div class="col-50">
			
              <h3>Billing Address</h3>
              <label for="fname"><i class="fa fa-user"></i> Full Name</label>
              <input type="text" id="fname" name="firstname" placeholder="John M. Doe" Required>
              <label for="email"><i class="fa fa-envelope"></i> Email</label>
              <input type="text" id="email" name="email" placeholder="john@example.com" Required>
              <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
              <input type="text" id="adr" name="address" placeholder="542 W. 15th Street" Required>
              <label for="city"><i class="fa fa-institution"></i> City</label>
              <input type="text" id="city" name="city" placeholder="New York" Required>

              <div class="row">
                <div class="col-50">
                  <label for="state">State</label>
                  <input type="text" id="state" name="state" placeholder="NY" Required>
                </div>
                <div class="col-50">
                  <label for="zip">Zip</label>
                  <input type="text" id="zip" name="zip" placeholder="10001" Required>
                </div>
              </div>
            </div>

            <div class="col-50">
              <h3>Payment</h3>
              <label for="fname">Accepted Cards</label>
              <div class="icon-container">
                <i class="fa fa-cc-visa" style="color:navy;"></i>
                <i class="fa fa-cc-amex" style="color:blue;"></i>
                <i class="fa fa-cc-mastercard" style="color:red;"></i>
                <i class="fa fa-cc-discover" style="color:orange;"></i>
              </div>
              <label for="cname">Name on Card</label>
              <input type="text" id="cname" name="cardname" placeholder="John Doe" >
              <label for="ccnum">Credit card number</label>
              <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" >
              <label for="expmonth">Exp Month</label>
              <input type="text" id="expmonth" name="expmonth" placeholder="September" > 
              <div class="row">
                <div class="col-50">
                  <label for="expyear">Exp Year</label>
                  <input type="text" id="expyear" name="expyear" placeholder="2018" >
                </div>
                <div class="col-50">
                  <label for="cvv">CVV</label>
                  <input type="text" id="cvv" name="cvv" placeholder="352" >
                </div>
              </div>
            </div>

          </div>
          <label>
            <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
          </label>
     
		     <a href="{{ route('cartclear.perform') }}"  class="btn btn-outline-dark me-2">Continue to checkout </a>
		
        </form>
      </div>
    </div>
    <div class="col-25">
      <div class="container">
	    <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>{{ count((array) session('cart')) }}</b></h4></span>
	   @php $total = 0 @endphp
        @if(session('cart'))
            @foreach(session('cart') as $id => $details)
     
        <p> <span class="nomargin">{{ $details['name'] }} x{{ $details['quantity'] }} </span><span class="price">${{ $details['price'] * $details['quantity'] }}</span></p> 
   
        <hr>
		  @endforeach
        @endif
       @php $total = 0 @endphp
                        @foreach((array) session('cart') as $id => $details)
                            @php $total += $details['price'] * $details['quantity'] @endphp
                        @endforeach   <p>Total: <span class="text-info">$ {{ $total + 1.99 }} (plus $1.99 delivery fee)</span></p>
      </div>
    </div>
  </div>

  
 @endauth 
        @guest
        <h1>Welcome to Smiley Food Order & Delivery! </h1>
        <p class="lead">You are currently viewing the home page. Please login or create an account to access more features.</p>
        @endguest
    </div>
@endsection
