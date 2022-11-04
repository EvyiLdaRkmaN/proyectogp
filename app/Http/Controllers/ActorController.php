<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actor;
use App\Models\Project;

class ActorController extends Controller
{
    public function addAct(Request $request, Project $project){
        $actor = new Actor();

        $actor -> clave = $request -> claveAct;
        $actor -> nombre = $request -> nomAct;
        $actor -> descripcion = $request -> descAct;
        $actor -> caracteristicas = $request -> caractAct;
        $actor -> responsabilidad = $request -> resAct;
        $actor -> referencias = $request -> refAct;
        $actor -> idProyecto= $request -> idProyecto;
        $actor -> save();

        return redirect()->route('actor', compact('project'));
    }

    public function plantillaActor(Project $project){
        return view('actores.actores', compact('project'));
    }

    public function show(Project $project, Actor $actor){
        return view('actores.show', compact('actor', 'project'));
    }

    public function edit(Project $project, Actor $actor){
        $actores = Actor::orderBy('id', 'asc')->paginate();
        return view('actores.edit', compact('actor', 'project'), compact('actores'));
    }

    public function update(Request $request,Project $project,Actor $actor){
        $actor->update($request->all());
        return view('actores.show', compact('actor', 'project'));
    }

    public function destroy(Actor $actor){
        $actor->delete();
        return redirect()->route('listarAct');
    }
}
