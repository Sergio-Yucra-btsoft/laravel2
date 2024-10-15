<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveProjectRequest;
use App\Models\Project;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { 
        $key = "propject.page" . request('page',1);    
        $projects = Cache::remember($key, 60, function () {
            return Project::paginate(10);
        });
        return view('projects.index', compact('projects'));
    }

    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    public function create()
    {
        return view('projects.create',[
            'project' => new Project() //se puede usar el constructor del modelo para inicializar el objeto
        ]);
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

    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index')->with('success', 'Se elimino el proyecto');  //mensaje de confirmacion de eliminacion;
    }


}
