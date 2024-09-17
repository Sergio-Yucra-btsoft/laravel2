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
        return view('projects.index', compact('projects'));
    }

    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store()
    {
        /*Project::create([
            'title' => request('title'),
            'url' => request('url'),
            'description' => request('description'),
        ]);*/
        $fields = request()->validate([
            'title' => 'required',
            'url' =>'required',
            'description' =>'required',
        ]);
        Project::create($fields); //la manera mas obtima de protejerse de asignacion masiva //nose necesita en le protected en el model

        return redirect()->route('projects.index');
    }

}
