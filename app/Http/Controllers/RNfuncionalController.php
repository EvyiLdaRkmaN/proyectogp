<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RNfuncional;
use App\Models\Project;

class RNfuncionalController extends Controller
{
    public function addRNF(Request $request, Project $project){
        $RNFuncional = new RNfuncional();

        $RNFuncional -> clave = $request -> claveRNF;
        $RNFuncional -> descripcion = $request -> descRNF;
        $RNFuncional -> idProyecto= $request -> idProyecto;
        
        $RNFuncional -> save();

        return redirect()->route('RNFuncional',compact('project'));
    }

    public function plantillaRNFuncionales(Project $project){
        return view('RNFuncionales.RNFuncionales', compact('project'));
    }

    public function listarRNF(Project $project){
        $RNFuncionales = RNfuncional::orderBy('id', 'asc')->paginate();
        return view('RNFuncionales.listarRNFuncional',compact('RNFuncionales'), compact('project'));
    }

    public function destroy(RNfuncional $RNfuncional){
        $RNfuncional->delete();
        return redirect()->route('listarRNF');
    }
}
