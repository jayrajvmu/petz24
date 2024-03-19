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
    public function order()
    {
        return view('order');
    }
    public function checkout()
    {
        return view('checkout');
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function faq()
    {
        return view('faq');
    }
    public function privacypolicy()
    {
        return view('privacypolicy');
    }
    
}
