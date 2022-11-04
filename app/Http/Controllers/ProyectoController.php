<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Actor;

class ProyectoController extends Controller
{
    public function addPro(Request $request){
        $projects = new Project();
        
        $projects -> nombreProyecto = $request -> nomPro;
        $projects -> save();

        return redirect()->route('dashboard');
    }
    
    public function plantillaActor(Project $project){
        return view('actores.actores', compact('project'));
    }

    public function listarAct(Project $project){
        $actores = Actor::orderBy('id', 'asc')->paginate();
        return view('actores.listarActores',compact('actores'), compact('project'));
    }

    public function listarPro(){
        $projects = Project::orderBy('id', 'asc')->paginate();
        return view('projects.listarProyectos',compact('projects'));
    }

    public function show(Project $project){
        return view('projects.show', compact('project'));
    }
    public function edit(Project $project){
        return view('projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project){

        $project->update($request->all());
        return redirect()->route('projects.show', $project);
    }

    public function destroy(Project $project){
        $project->delete();
        return redirect()->route('listarPro');
    }
}
