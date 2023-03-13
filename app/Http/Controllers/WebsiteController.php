<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index() 
    {
        return view('website.index');
    }

    public function car()
    {
        return view('website.car');
    }

    public function about()
    {
        return view('website.about');
    }
}
