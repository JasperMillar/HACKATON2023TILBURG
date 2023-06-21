<?php

namespace App\Http\Controllers;

use App\Models\GeldTips;
use Illuminate\Http\Request;

class GeldTipsController extends Controller
{
    public function index()
    {
        return view('GeldTips.GeldTips', ['title' => 'GeldTips']);
    }

}
