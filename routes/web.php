<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Models\ReportForm;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/checkout', function () {
     return view('checkout');
});

Route::get('/checkout', 'App\Http\Controllers\CartClear@perform')->name('cartclear.perform');

Route::get('/order', function () {
     return view('order');
});

Route::get('/payment', function () {
     return view('payment');
});

Route::get('/menu', function () {
     return view('menu');
});

Route::get('/about', function () {
     return view('about');
});


Route::get('/login', function () {
     return view('login');
});

Route::get('/thanks', function () {
     return view('thanks');
});


Route::get('/report', function () {
     return view('report');
});



Route::post('/report', function () {
     reportForm::create([
	 'query' => request ('myQuery'),
	'fname' => request ('firstname'),
	 'lname' => request ('lastname'),
	 'email' => request ('email'),
	'subject' => request ('subject')

]);
	return redirect ('/thanks');
});

// cart routes

Route::get('/menu', [ProductController::class, 'index']);  
Route::get('cart', [ProductController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [ProductController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [ProductController::class, 'remove'])->name('remove.from.cart');



Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    /**
     * Home Routes
     */
	 
    Route::get('/', 'HomeController@index')->name('home.index');


	
    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');

    });

    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
    });
});