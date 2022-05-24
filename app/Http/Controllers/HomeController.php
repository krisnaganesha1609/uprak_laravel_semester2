<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('layouts.pages.about');
    }

    public function shop()
    {
        return view('layouts.pages.shop');
    }

    public function contact()
    {
        return view('layouts.pages.contact');
    }

    public function wishlist()
    {
        return view('layouts.pages.wishlist');
    }

    public function cart()
    {
        return view('layouts.pages.cart');
    }

    public function search()
    {
        return view('layouts.pages.search');
    }

    public function order()
    {
        return view('layouts.pages.order');
    }

    public function category()
    {
        return view('layouts.pages.category');
    }
}
