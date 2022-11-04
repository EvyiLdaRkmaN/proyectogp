<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rfuncional;
use App\Models\Project;

class RfuncionalController extends Controller
{
    public function addRF(Request $request, Project $project){
        $RFuncional = new Rfuncional();

        $RFuncional -> clave = $request -> claveRF;
        $RFuncional -> descripcion = $request -> descRF;
        $RFuncional -> idProyecto= $request -> idProyecto;
        
        $RFuncional -> save();

        return redirect()->route('RFuncional',compact('project'));
    }

    public function plantillaRFuncionales(Project $project){
        return view('RFuncionales.RFuncionales', compact('project'));
    }

    public function listarRF(Project $project){
        $RFuncionales = Rfuncional::orderBy('id', 'asc')->paginate();
        return view('RFuncionales.listarRFuncional',compact('RFuncionales'), compact('project'));
    }

    public function destroy(Rfuncional $Rfuncional){
        $Rfuncional->delete();
        return redirect()->route('listarRF');
    }
}
