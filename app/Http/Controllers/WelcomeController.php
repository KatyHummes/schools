<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function welcome()
    {
        $user = auth()->user()->name;

        return view('welcome', compact('user'));
    }
}
