<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;

class OpdrachtController extends Controller
{
    public function index()
    {
        $jobs = Job::all();
        return view('opdrachten.index', compact('jobs'));
    }

    public function show($id){
        $jobs = Job::findOrFail($id);
        return view('opdrachten.show', compact('jobs', $jobs));
    }
}
