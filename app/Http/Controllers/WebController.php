<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index() {
        return view("admin.index");
    }

    public function aboutUs()
    {
        return view('about-us');
    }
    public function terms()
    {
        return view('terms');
    }


}
