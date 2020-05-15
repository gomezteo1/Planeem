<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Model\PenetracionMercado;
use App\Model\respuestaAnalisis;
use DB;
class PenetracionMercadoController extends Controller
{


    public function storage(Request $request){

        
        $id_Planeacion = $request->input('id_Planeacion');
        $id_tipo_Penetración = $request->input('id_tipo_Penetración');
        $idTipo = $request->input('id_penetracion_mercadoanf');
        $pesoRelativo = $request->input('pesoRelativo');
        $calificación = $request->input('Calificación');
        $pesoPonderado = $request->input('pesoPonderado');





        // dd($id_Planeacion,$id_tipo_Penetración,$idTipo,$pesoRelativo,$Calificación,$pesoPonderado);

            for ($a=0; $a < count($id_tipo_Penetración) ; $a++) { 
                for ($i = 0; $i < count($idTipo); $i++) {
                    
                    PenetracionMercado::updateorCreate(
                        [
                            'id_Planeacion' => $id_Planeacion,
                            'id_penetracion_mercadoanf' => $idTipo[$i],
                            'id_tipo_Penetracion' => $id_tipo_Penetración[$a],
                        ],
                        [
                        
                            'id_Planeacion' => $id_Planeacion,
                            'id_tipo_Penetracion' =>$id_tipo_Penetración[$a],
                            'id_penetracion_mercadoanf' => $idTipo[$i],
                            'Peso_Relativo' => $pesoRelativo[$i],
                            'Calificación' => $calificación[$i],
                            'Peso_Ponderado' => $pesoPonderado[$i]
                        ]
                    );
                }    
            }
            
        $message = array(   
            'message' => 'Empresas Guardadas con Éxito',
            'alert-type' => 'success'
        );


        $typeO = ['oAlta','oMedia','oBaja'];
        $typeA = ['aAlta','aMedia','aBaja'];




        $Oportunidades= DB::table('respuesta_analisis_porters')
        ->join('analisis_porters', 'respuesta_analisis_porters.idAnaPorter', '=', 'analisis_porters.id')
        ->select('analisis_porters.nombre','respuesta_analisis_porters.id')
        ->whereIn('respuesta', $typeO)
        ->where('idPlaneacion', $id_Planeacion)
        ->get();

        $Amenazas=DB::table('respuesta_analisis_porters')
        ->join('analisis_porters', 'respuesta_analisis_porters.idAnaPorter', '=', 'analisis_porters.id')
        ->select('analisis_porters.nombre','respuesta_analisis_porters.id')
        ->whereIn('respuesta', $typeA)
        ->where('idPlaneacion', $id_Planeacion)
        ->get();



        return view('Modulo2.factoresExternos')->with(compact('id_Planeacion','Oportunidades','Amenazas'))->with($message);
    }
}
