<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Http\Requests\StoreProjectRequest;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::paginate(7);
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectRequest $request)
    {
        // salvo nella variabile exist il risultato della ricerca
        $exist = Project::where('name', $request->name)->first();
// se la ricerca ha trovato un risultato parte il messaggio di errore
        if ($exist) {
            return redirect()->route('admin.projects.index')->with('error', 'Progetto già esistente');
        }

        $new_project = new Project();
        $new_project->name = $request->name;
        $new_project->slug = Project::generateSlug($request->name);
        $new_project->date_start = $request->date_start;
        $new_project->description = $request->description;
        $new_project->save();

        return redirect()->route('admin.projects.create', ['project' => $new_project->id])->with('success', 'Progetto inserito con successo');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $project->name = $request->name;
        $project->slug = Project::generateSlug($request->name);
        $project->date_start = $request->date_start;
        $project->description = $request->description;
        $project->save();

        return redirect()->route('admin.projects.index', ['project' => $project->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('admin.projects.index');
    }
}
