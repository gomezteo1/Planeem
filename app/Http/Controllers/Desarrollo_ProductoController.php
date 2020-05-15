<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Desarrollo_Producto;
use App\Model\analisisPorter;
use App\Model\respuestaAnalisisPorter;
use App\Model\ansorft;
use App\Model\TipoPreguntaansorft;
use App\Model\tipo_mercado;
use App\Model\tipo_Desarrollo_Producto;

class Desarrollo_ProductoController extends Controller
{
    public function storage(Request $request){


        $Peso_Relativo = $request->input('Peso_Relativo');
        $Calificación = $request ->input('Calificación');
        $Peso_Ponderado = $request->input('Peso_Ponderado');
        $id_tipo_preguntaansorfts = $request->input('id_tipo_preguntaansorfts');
        $id_tipo_Desarrollo_Producto = $request->input('id_tipo_Penetracion');
        $id_planeacion = $request->input('id_planeacion');

        for ($a=0; $a <  count($id_tipo_Desarrollo_Producto) ; $a++) { 


            for ($i = 0; $i < count($id_tipo_preguntaansorfts); $i++) {
               
                Desarrollo_Producto::updateorCreate(
                    [
                        "id_Planeacion" => $id_planeacion,
                        "id_tipo_Desarrollo_Producto" => $id_tipo_Desarrollo_Producto[$a],
                        "id_tipo_preguntaansorfts" => $id_tipo_preguntaansorfts[$i],

                    ],
                    [
                        "id_tipo_preguntaansorfts" => $id_tipo_preguntaansorfts[$i],
                        "id_Planeacion" => $id_planeacion,
                        "id_tipo_Desarrollo_Producto" => $id_tipo_Desarrollo_Producto[$a],
                        "Peso_Relativo" => $Peso_Relativo[$a],
                        "Calificación" => $Calificación[$a],
                        "Peso_Ponderado"   => $Peso_Ponderado[$a]
                    ]
                );
            }
        }

        $DesaMerca = TipoPreguntaansorft::select('tipo_preguntaansorfts.*')
        ->where('idTipo',1)
        ->get();


        $tipo_mercado=tipo_mercado::all();
    
        
        $ansorft = ansorft::select('ansorfts.*','tipo_mercado.Nametipo_mercado','tipo_preguntaansorfts.nombre','tipo_preguntaansorfts.id')
        ->join('tipo_mercado','ansorfts.id_tipo_mercado','tipo_mercado.id_tipo_mercado')
        ->join('tipo_preguntaansorfts','ansorfts.idTipoPregunta','tipo_preguntaansorfts.id')
        ->where('idPlaneacion',$id_planeacion)
        ->get();


  
        $cantidadMercado= count($ansorft);

        ///Sustitutos
        $Sustitutos = ansorft::select('ansorfts.*','tipo_mercado.Nametipo_mercado','tipo_preguntaansorfts.nombre','tipo_preguntaansorfts.id')
        ->join('tipo_mercado','ansorfts.id_tipo_mercado','tipo_mercado.id_tipo_mercado')
        ->join('tipo_preguntaansorfts','ansorfts.idTipoPregunta','tipo_preguntaansorfts.id')
        ->where('tipo_mercado.Nametipo_mercado',"Sustitutos")
        ->where('idPlaneacion',$id_planeacion)
        ->get();


        ///Producto
        $Producto = ansorft::select('ansorfts.*','tipo_mercado.Nametipo_mercado','tipo_preguntaansorfts.nombre','tipo_preguntaansorfts.id')
        ->join('tipo_mercado','ansorfts.id_tipo_mercado','tipo_mercado.id_tipo_mercado')
        ->join('tipo_preguntaansorfts','ansorfts.idTipoPregunta','tipo_preguntaansorfts.id')
        ->where('tipo_mercado.id_tipo_mercado',"2")
        ->where('idPlaneacion',$id_planeacion)
        ->get();

        ///Productotitutos
        $Productotitutos = ansorft::select('ansorfts.*','tipo_mercado.Nametipo_mercado','tipo_preguntaansorfts.nombre','tipo_preguntaansorfts.id')
        ->join('tipo_mercado','ansorfts.id_tipo_mercado','tipo_mercado.id_tipo_mercado')
        ->join('tipo_preguntaansorfts','ansorfts.idTipoPregunta','tipo_preguntaansorfts.id')
        ->where('tipo_mercado.Nametipo_mercado',"Forma de Uso y Aplicación del Productotitutos")
        ->where('idPlaneacion',$id_planeacion)
        ->get();
                
        
      
         ///  Intercambio de Tecnología
        $Tecnología = ansorft::select('ansorfts.*','tipo_mercado.Nametipo_mercado','tipo_preguntaansorfts.nombre','tipo_preguntaansorfts.id')
        ->join('tipo_mercado','ansorfts.id_tipo_mercado','tipo_mercado.id_tipo_mercado')
        ->join('tipo_preguntaansorfts','ansorfts.idTipoPregunta','tipo_preguntaansorfts.id')
        ->where('tipo_mercado.Nametipo_mercado',"Intercambio de Tecnología")
        ->where('idPlaneacion',$id_planeacion)
        ->get();
                      
        
        /// Geográficamente
        $Geográficamente = ansorft::select('ansorfts.*','tipo_mercado.Nametipo_mercado','tipo_preguntaansorfts.nombre','tipo_preguntaansorfts.id')
        ->join('tipo_mercado','ansorfts.id_tipo_mercado','tipo_mercado.id_tipo_mercado')
        ->join('tipo_preguntaansorfts','ansorfts.idTipoPregunta','tipo_preguntaansorfts.id')
        ->where('tipo_mercado.Nametipo_mercado',"Geográficamente")
        ->where('idPlaneacion',$id_planeacion)
        ->get(); 
        
        //Segmentación
        $Segmentación = ansorft::select('ansorfts.*','tipo_mercado.Nametipo_mercado','tipo_preguntaansorfts.nombre','tipo_preguntaansorfts.id')
        ->join('tipo_mercado','ansorfts.id_tipo_mercado','tipo_mercado.id_tipo_mercado')
        ->join('tipo_preguntaansorfts','ansorfts.idTipoPregunta','tipo_preguntaansorfts.id')
        ->where('tipo_mercado.Nametipo_mercado',"Segmentación")
        ->where('idPlaneacion',$id_planeacion)
        ->get(); 

        //Alianzas Convenios
        $Convenios = ansorft::select('ansorfts.*','tipo_mercado.Nametipo_mercado','tipo_preguntaansorfts.nombre','tipo_preguntaansorfts.id')
        ->join('tipo_mercado','ansorfts.id_tipo_mercado','tipo_mercado.id_tipo_mercado')
        ->join('tipo_preguntaansorfts','ansorfts.idTipoPregunta','tipo_preguntaansorfts.id')
        ->where('tipo_mercado.Nametipo_mercado',"Alianzas Convenios")
        ->where('idPlaneacion',$id_planeacion)
        ->get(); 

        //Promoción
        $Promoción = ansorft::select('ansorfts.*','tipo_mercado.Nametipo_mercado','tipo_preguntaansorfts.nombre','tipo_preguntaansorfts.id')
        ->join('tipo_mercado','ansorfts.id_tipo_mercado','tipo_mercado.id_tipo_mercado')
        ->join('tipo_preguntaansorfts','ansorfts.idTipoPregunta','tipo_preguntaansorfts.id')
        ->where('tipo_mercado.Nametipo_mercado',"Promoción")
        ->where('idPlaneacion',$id_planeacion)
        ->get(); 
        

        $datos = count(ansorft::all());
        


        return view('Modulo2.ansorftDesarrolloMerca')->with(compact('ansorft','datos','DesaMerca','id_planeacion','tipo_mercado','Sustitutos','Producto','Productotitutos','Tecnología','Geográficamente','Segmentación','Convenios','Promoción','cantidadMercado'));

    }
}
