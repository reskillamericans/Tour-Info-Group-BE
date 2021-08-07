<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TourController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about-us');
    }

    public function travel()
    {
        return view('travel');
    }

    public function results()
    {
        return view('results');
    }
}
