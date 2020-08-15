<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyCartController extends Controller
{

    /**
     * Show the cart iterms
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('cart/cart');
    }

     /**
     * Show the checkbout page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function checkOut()
    {
        return view('cart/checkout');
    }
}
