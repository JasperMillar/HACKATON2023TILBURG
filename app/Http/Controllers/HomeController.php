<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index', ['title' => 'Home']);
    }

    public function werkgever()
    {
        return view('werkgever.werkgever', ['title' => 'Voor de werkgever']);
    }
}
