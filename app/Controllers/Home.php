<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('index');
    }

    public function product()
    {
        return view('product');
    }

    public function productDescription()
    {
        return view('product_desc');
    }

    public function profile()
    {
        return view('profile');
    }
    public function cart()
    {
        return view('cart');
    }
    public function wishlist()
    {
        return view('wishlist');
    }
    
}
