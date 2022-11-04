<?php

namespace App\Http\Controllers;

use App\Models\Artefacto;
use App\Models\Plantilla;
use App\Models\Project;
use Illuminate\Http\Request;


class PlantillaController extends Controller
{
    public function plantilla(Project $project, Artefacto $artefacto){
        $listaPlantilla = Plantilla::orderBy('id', 'asc')->paginate();
        return view('artefactos.plantilla', compact('listaPlantilla'),compact('artefacto', 'project'));
    }

    public function addAtributo(Request $request, Project $project, Artefacto $artefacto){
        $plantilla = new Plantilla();
        $plantilla -> atributos = $request -> atributo;
        $plantilla -> descripcion = $request -> descripcion;
        $plantilla -> tipo = $request -> tipo;
        $plantilla -> rango = $request -> rango;
        $plantilla -> excepciones = $request -> excepciones;
        $plantilla -> idArtefacto = $request -> idArtefacto;
        $plantilla -> idProyecto = $request -> idProyecto;
        
        $plantilla -> save();

        return redirect()->route('addPlantilla', compact('project', 'artefacto'));
    }
}
