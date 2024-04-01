<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Auth;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::where('user_id', Auth::id())->orderByDesc('created_at');
        return view('editor', ['projects' => $projects]);
    }
    public function create()
    {
        $project = new Project();

        $project->user_id = Auth::id();
        $project->content = "Hello world";
        $project->save();

        return redirect()->route('project.show', ['id' => $project]);
    }

    public function save(StoreProjectRequest $request)
    {
        return 'me';
    }

    public function show(Project $project)
    {
        dd($project);
    }
}
