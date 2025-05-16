<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // use view when we don't have model
        return view('home');
    }

    public function shop()
    {
        return view('shop');
    }

    public function about()
    {
        return view('about');
    }
}
