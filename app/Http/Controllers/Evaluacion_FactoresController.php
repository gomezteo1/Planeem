<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Evaluacion_Factores;
use App\Model\TipoPreguntaansorft;
use App\Model\tipo_Penetracion;
class Evaluacion_FactoresController extends Controller
{


    public function store(Request $request)

    {  
        $id_respuesta_analisis_porters = $request->get('id_respuesta');
        $id_Planeacion = $request->get('id_Planeacion');
        $tipo = $request->get('tipo');
        $pesoRelativo = $request->get('Peso_Relativo');
        $calificacion = $request->get('Calificación');
        $peso = $request->get('Peso_Ponderado');
        
      
        foreach ($tipo as $tipo) {

            for ($i = 0; $i < count($id_respuesta_analisis_porters); $i++) {
               
                Evaluacion_Factores::updateorCreate(
                    [
                        'id_Planeacion' => $id_Planeacion,
                        'id_respuesta_analisis_porters' =>$id_respuesta_analisis_porters[$i]
                    ],
                    [
                        'id_Planeacion' => $id_Planeacion,
                        'id_respuesta_analisis_porters' => $id_respuesta_analisis_porters[$i],
                        'tipo' => $tipo,
                        'Peso_Relativo' => $pesoRelativo[$i],
                        'Calificación' => $calificacion[$i],
                        'Peso_Ponderado' => $peso[$i],
                    ]
                );
            }
        }



        $message = array(
            'message' => 'Empresas Guardadas con Éxito',
            'alert-type' => 'success'
        );
    
      return view('Modulo2.analisisEFInfo')->with($message)->with('id_Planeacion',$id_Planeacion);

    }
}
