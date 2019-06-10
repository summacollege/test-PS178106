<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfielController extends Controller
{
    public function index()
    {
        return view('home.profiel');
    }
}
