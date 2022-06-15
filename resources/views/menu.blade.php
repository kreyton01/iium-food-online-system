
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
    <title>HOME - Welcome to Smiley Food Order & Delivery</title>
  </head>
  <body>
<link href="{{ URL::asset('css/smileyHome.css') }}" rel="stylesheet">
   
	 <link href=	"{{ URL::asset('css/style.css') }}" rel="stylesheet"
</head>

<body>
  <div class="top-site">

    <div class="top-site-child description" style="width:100%">

      <h2>Welcome to Smiley Food Order & Delivery</h2>


    </div>

    <div class="top-site-child advertisement">
      <img src="{{ URL::asset('images/adsInfo.jpg') }}" alt="This area should be an advertisement area." style="width:100%">
    </div>
  </div>
  <br><br>

  <div class="topnav">
    <a href="/" class="nav-link" >Homepage</a>
    <a href="/order" class="nav-link">Order</a>
    <a href="/menu" class="active">Menu</a>
    <a href="/payment"class="nav-link">Payment</a>
    <a href="/login"class="nav-link">Login</a>
  </div>

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">
            
            <form action="food-search.html" method="POST">
                <input type="search" name="search" placeholder="Search for Food.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->



    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Food Menu</h2>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="{{ URL::asset('images/menu-pizza.jpg') }}" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Food Title</h4>
                    <p class="food-price">$2.3</p>
                    <p class="food-detail">
                        Made with Italian Sauce, Chicken, and organice vegetables.
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>v

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="{{ URL::asset('images/menu-burger.jpg') }}" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Smoky Burger</h4>
                    <p class="food-price">$2.3</p>
                    <p class="food-detail">
                        Made with Italian Sauce, Chicken, and organice vegetables.
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="{{ URL::asset('images/menu-burger.jpg') }}" alt="Chicke Hawain Burger" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Nice Burger</h4>
                    <p class="food-price">$2.3</p>
                    <p class="food-detail">
                        Made with Italian Sauce, Chicken, and organice vegetables.
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="{{ URL::asset('images/menu-pizza.jpg') }}" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Food Title</h4>
                    <p class="food-price">$2.3</p>
                    <p class="food-detail">
                        Made with Italian Sauce, Chicken, and organice vegetables.
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="{{ URL::asset('images/menu-pizza.jpg') }}"  alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Food Title</h4>
                    <p class="food-price">$2.3</p>
                    <p class="food-detail">
                        Made with Italian Sauce, Chicken, and organice vegetables.
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="{{ URL::asset('images/menu-momo.jpg') }}"  alt="Chicke Hawain Momo" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Chicken Steam Momo</h4>
                    <p class="food-price">$2.3</p>
                    <p class="food-detail">
                        Made with Italian Sauce, Chicken, and organice vegetables.
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>


            <div class="clearfix"></div>

            

        </div>

    </section>
    <!-- fOOD Menu Section Ends Here -->



    <!-- footer Section Starts Here -->
    <section class="footer">
        <div class="container text-center">
        </div>
    </section>
    <!-- footer Section Ends Here -->

</body>
</html>