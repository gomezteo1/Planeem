<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\respuestaverbos;
use App\Model\estrategias;
use App\Model\Proyectos;


class ConteorllerFormulacionAsocia extends Controller
{
    public function index(Request $request){
            $id = $request->input('id_planecion');
            $Proyectos = Proyectos::find($id);
            $respuestaverbos = respuestaverbos::all();
            $estrategias = estrategias::all();

            return view('Modulo3.FormulacionAsociar')->with(compact('id','Proyectos','respuestaverbos','estrategias'));
    }
}
