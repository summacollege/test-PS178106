<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;

class OpdrachtPlaatsController extends Controller
{
    public function index()
    {
        return view('opdrachtplaatsen.index');
    }

    public function store(Request $request)
    {
        Job::insert(['jobtitle' => request('name'), 'jobdescription' => request('description'), 'date' => request('date')]);
        return redirect('/opdrachten');
    }
}
