<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Validator,DB, Hash, Mail,Auth;
use App\Model\pensamiento_pensamiento;
use App\Model\Proyectos;
use App\Model\Corporativos;
use App\Http\Controllers\Controller;

class CplaneacionController extends Controller
{
    


    protected function validator(array $data)
    {

        return Validator::make($data, [
            'Mision_Organizacional'=>['required'],
            'Vision_Organizacional'=> ['required'],
            'Mega_Empresarial' => ['required'],
            'Propuesta_valor'  => ['required'],
            'id_Planeacion' => ['required']
        ]);
    }



    public function store(Request $request)
    {
        $this->validator($request->all())->validate();
        $pensamiento = new pensamiento_pensamiento();
        $Proyectos = Proyectos::all();
       
        $pensamiento->Mision_Organizacional=$request->input('Mision_Organizacional');
        $pensamiento->Vision_Organizacional=$request->input('Vision_Organizacional');
        $pensamiento->Mega_Empresarial=$request->input('Mega_Empresarial');
        $pensamiento->Propuesta_valor=$request->input('Propuesta_valor');
        $pensamiento->id_Planeacion=$request->input('id_Planeacion');
        $pensamiento->save();
       
        $pensamientos = pensamiento_pensamiento::all();
        $proyect = $pensamientos->last();
     

        $id_plane = Proyectos::all(); 

        $proyecto = Proyectos::all(); 

        $proyecto->nombre_proyecto=$request->input('nombre_proyecto');
       
        return view('Modulo1.Corporativos.vista24')->with('id_plane',$id_plane)->with('proyecto',$proyecto);

    }
}
