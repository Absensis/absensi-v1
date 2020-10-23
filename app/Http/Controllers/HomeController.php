<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard()
    {
        return view('home.home');
    }

    public function about()
    {
        return view('home.about');
    }
}
