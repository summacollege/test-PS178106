<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cv;
use App\User;

class CvController extends Controller
{
    public function storecv(Request $request)
    {
        User::update(['cv' => request('cv'), 'motivatie' => request('motivation')]);
        return redirect('/profiel');
    }
}
