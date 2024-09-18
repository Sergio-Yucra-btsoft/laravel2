<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveProjectRequest;
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

    public function store(SaveProjectRequest $request)
    {
        Project::create($request->validated()); //la manera mas obtima de protejerse de asignacion masiva //nose necesita en le protected en el model

        return redirect()->route('projects.index');
    }

    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    public function update(SaveProjectRequest $request, Project $project)
    {
        $project->update($request->validated());
        return redirect()->route('projects.index');
    }


}
