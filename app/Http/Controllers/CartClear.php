<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartClear extends Controller 
{
 
    public function perform(Request $request)
    {
        $request->session()->forget('cart');
        
    return view('checkout');
    }
}