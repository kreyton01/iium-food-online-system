

<header class="p-3 bg-dark text-white">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
      </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
    


               <!--  <li><a class="{{Request::is('/') ? 'nav-link active' : ''}}" href="{{ url('/') }}">Home</a></li>	
                <li><a class="{{(Request::is('/payment') || Request::is('payment/*')) ? 'nav-link active' : ''}}" href="{{ ('/payment') }}">Payment</a></li>
                <li><a class="{{(Request::is('/menu') || Request::is('/menu/*')) ? 'nav-link active' : ''}}" href="{{ url('/menu') }}">Menu</a></li> -->
				
         <li @class(['bg-secondary' => request()->is('/')])> <a href="/" class="nav-link px-2 text-white">Home</a></li>
         <li @class(['bg-secondary' => request()->is('menu')])> <a href="/menu" class="nav-link px-2 text-white">Menu</a></li>
	     <li @class(['bg-secondary' => request()->is('payment')])> <a href="/payment" class="nav-link px-2 text-white">Payment</a></li>
         <li @class(['bg-secondary' => request()->is('about')])><a href="/about" class="nav-link px-2 text-white">About</a></li>
		  <li @class(['bg-secondary' => request()->is('report')])><a href="/report" class="nav-link px-2 text-white">Contact Us</a></li>
	
    

      </ul>


      @auth
        {{auth()->user()->name}}
    


    <div class="text-end">
	 <div class="dropdown" >
			
             <button type="button" class="btn btn-info" data-toggle="dropdown"> 
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                </button>
                <div class="dropdown-menu ">
                    <div class="row total-header-section">
                        <div class="col-lg-6 col-sm-6 col-6">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                        </div>
                        @php $total = 0 @endphp
                        @foreach((array) session('cart') as $id => $details)
                            @php $total += $details['price'] * $details['quantity'] @endphp
                        @endforeach
                        <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
                            <p>Total: <span class="text-info">$ {{ $total }}</span></p>
                        </div>
                    </div>
                    @if(session('cart'))
                        @foreach(session('cart') as $id => $details)
                            <div class="row cart-detail">
                                <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                    <img src="{{ $details['image'] }}" />
                                </div>
                                <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                    <p>{{ $details['name'] }}</p>
                                    <span class="price text-info"> ${{ $details['price'] }}</span> <span class="count"> Quantity: {{ $details['quantity'] }}</span>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                           <a href="{{ route('cart') }}" class="btn btn-primary btn-block">View all</a>
							
                        </div>
                    </div>
                </div>
            </div>
        </div>		
   
          <a href="{{ route('logout.perform') }}" class="btn btn-outline-light me-2">Logout</a>
		        
        </div>
   
 
      @endauth

      @guest
        <div class="text-end">
          <a href="{{ route('login.perform') }}" class="btn btn-outline-light me-2">Login</a>
          <a href="{{ route('register.perform') }}" class="btn btn-warning">Sign-up</a>
        </div>
      @endguest
    </div>
  </div>
</header>