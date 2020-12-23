<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class newcontroller extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function product()
    {
        return view('product');
    }
    public function productdetails()
    {
        return view('productdetails');
    }
    public function cart()
    {
        return view('cart');
    }
    public function checkout()
    {
        return view('checkout');
    }
    public function contact()
    {
        return view('contact');
    }

}
