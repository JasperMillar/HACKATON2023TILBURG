<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RekenmachineController extends Controller
{
    public function index()
    {
        return view('rekenmachine.index', ['title' => 'Berkenen']);
    }

    public function store(Request $request)
    {
        $request->validate([
            'kinderen' => 'required',
            'partner' => 'required',
            'vermogen' => 'required',
            'inkomen' => 'required',
        ]);

        return view('rekenmachine.uitslag', ['title' => 'Uitslag'], ['uitslag' => $request]);
    }
}
