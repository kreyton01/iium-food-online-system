<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <script src="HOME.javascript" charset="utf-8"></script>

	<link href="{{ URL::asset('css/smileyHome.css') }}" rel="stylesheet">
    <meta charset="utf-8">

	<link href="{{ URL::asset('js/Storage.js') }}" rel="script">
    <link rel="stylesheet" href="StorageStyle.css">
    <title>HOME - Welcome to Smiley Food Order & Delivery</title>
  </head>
  <body>

  <div class="top-site">

    <div class="top-site-child description" style="width:100%">

      <h2>Welcome to Smiley Food Order & Delivery</h2>

    </div>

    <div class="top-site-child advertisement">
      <img src="{{ URL::asset('images/adsInfo.jpg') }}" alt="I am sorry sir, currently I do not know how to create API." style="width:100%">
    </div>
  </div>
  <br><br>

  <div class="topnav">
    <a href="/" class="nav-link">Homepage</a>
    <a href="/order" class="active" >Order</a>
    <a href="/menu"class="nav-link">Menu</a>
    <a href="/payment"class="nav-link">Payment</a>
    <a href="/login"class="nav-link">Login</a>
  </div>


<body onload="doShowAll()">
	<h2>Shopping Cart</h2>
	<p>Insert food name and quantity from our list of foods.</p>
	<form name=ShoppingList>
  <div class="foodpic">

    <div class="foodpic-child">
    	<table>
				<tr>

					<td><b>Item:</b><input type=text name=name></td>
					<td><b>Quantity:</b><input type=text name=data></td>

				</tr>

				<tr>
					<td>
					    <input type=button value="Save"   onclick="SaveItem()">
					    <input type=button value="Update" onclick="ModifyItem()">
					    <input type=button value="Delete" onclick="RemoveItem()">
					</td>
				</tr>
			</table>
		</div>

		<div id="items_table">
			<h3>Shopping List</h3>
			<table id=list></table>
			<p>
				<label><input type=button value="Clear" onclick="ClearAll()">
					<i>* Delete all items</i></label>
			</p>

    </div>

  </div>

  </body>
</html>
