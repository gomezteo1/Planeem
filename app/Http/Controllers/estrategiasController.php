<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\estrategiass;

class estrategiasController extends Controller

{

    public function storage( Request $request){

        $id_respuesta_analisis = $request->input('id_respuesta_analisis');

        $id_respuesta_capacidad = $request->input('id_respuesta_capacidad');

      

        for ($i=0; $i < count($ $id_respuesta_analisis) ; $i++) { 
            
            Corporativos::updateOrCreate([
                'valores'=> $valores1[$i],
                'id_Planeacion'=> $id_Planeacion,
                'descripcion'=>$descripcion[$i]
            ]);
     
    }
          
    return view('Modulo2.analisisEFIgrafica');

    }
   
}


    

