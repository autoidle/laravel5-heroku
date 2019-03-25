<?php

namespace App\Http\Controllers;

class WelcomeController extends Controller
{
    public function show()
    {
        return view('welcome');
    }
}
