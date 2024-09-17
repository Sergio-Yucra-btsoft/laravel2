<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::get();
        return view('project', compact('projects'));
    }

    public function show(Project $project)
    {
        return view('vista', compact('project'));
    }

}
