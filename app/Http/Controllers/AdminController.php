<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        return view('layouts.pages.admin.admin_page');
    }

    public function products()
    {
        return view('layouts.pages.admin.admin_products');
    }
    public function order()
    {
        return view('layouts.pages.admin.admin_order');
    }

    public function users()
    {
        return view('layouts.pages.admin.admin_users');
    }

    public function contact()
    {
        return view('layouts.pages.admin.admin_contact');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
