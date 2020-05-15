<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\ansorft;
use App\Model\Proyectos;
use App\Model\TipoPreguntaansorft;
use App\Model\tipo_mercado;

class AnsorftController extends Controller
{

    public function index()
    {
         $ansorft=ansorft::all();

         
         $DesaMerca = TipoPreguntaansorft::select('tipo_preguntaansorfts.*')
        ->where('idTipo',1)
        ->get();


        $tipo_mercado=tipo_mercado::all();

        //Aca falta la amenaza que se no listaba :(
        //Tenemos que crear un metodo donde se pueda obtener y mandar a la vista  

        return view('Modulo2.ansorftDesarrolloMerca')->with(compact('ansorft','DesaMerca','tipo_mercado','amenaza'));
    }


    public function create()
    {
        //
        $ansorft=ansorft::all();

        $id_planeacion = Proyectos::all();

        return view('Modulo2.ansorftDesarrolloMerca')->with(compact('ansorft','id_planeacion'));
    }

    public function store(Request $request)
    {

        $planeacion = $request->get('idPlaneacion');
        $id_tipo_mercado = $request->get('id_tipo_mercado');
        $idTipo = $request->get('preguntas');
        $pesoRelativo = $request->get('pesoRelativo');
        $calificacion = $request->get('calificacion');
        $pesoPonderado = $request->get('pesoPonderado');
         

        
            foreach($id_tipo_mercado as $id_tipo_mercado){
                for ($i = 0; $i < count($idTipo); $i++) {
                                            
                            
                    ansorft::updateorCreate(
                        [
                            'idPlaneacion' => $planeacion,
                            'idTipoPregunta' => $idTipo[$i],
                        ],
                        [
                            'idTipoPregunta' => $idTipo[$i],
                            'idPlaneacion' => $planeacion,
                            'id_tipo_mercado' =>$id_tipo_mercado,
                            'pesoRelativo' => $pesoRelativo[$i],
                            'calificacion' => $calificacion[$i],
                            'pesoPonderado' => $pesoPonderado[$i]
                        ]
                    );
            
            }   
            }

                        
        
            $message = array(   
                'message' => 'Empresas Guardadas con Éxito',
                'alert-type' => 'success'
            );


       return back()->with($message);

    }

    public function datos($id){

        $ansorft = ansorft::select('idTipoPregunta as idTipoPregunta','pesoRelativo as pesoRelativo','calificacion as calificacion','pesoPonderado as pesoPonderado')
        ->where('idPlaneacion',$id)
        ->get();

        return response()->json($ansorft);
    }

}