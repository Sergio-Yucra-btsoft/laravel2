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
        Project::create(request()->all()); //usar solo si los datos de la bd son iguales  a los del formulario
        return redirect()->route('projects.index');
    }

}
