<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }

    public function show($id){
        $projects = Project::findOrFail($id);
        return view('projects.show', compact('projects', $projects));
    }
}
