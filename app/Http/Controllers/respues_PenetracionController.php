<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\respues_Penetracion;
use App\Model\analisisPorter;
use App\Model\respuestaAnalisisPorter;
use App\Model\ansorft;
use App\Model\TipoPreguntaansorft;
use App\Model\tipo_mercado;
use App\Model\tipo_Desarrollo_Producto;

class respues_PenetracionController extends Controller
{
    public function storage(Request $request){


        $Peso_Relativo = $request->input('Peso_Relativo');
        $Calificación = $request ->input('Calificación');
        $Peso_Ponderado = $request->input('Peso_Ponderado');
        $id_tipo_preguntaansorfts = $request->input('id_tipo_preguntaansorfts');
        $id_tipo_Penetracion = $request->input('id_tipo_Penetracion');
        $id_planeacion = $request->input('id_planeacion');

        for ($a=0; $a <  count($id_tipo_Penetracion) ; $a++) { 


            for ($i = 0; $i < count($id_tipo_preguntaansorfts); $i++) {
               
                respues_Penetracion::updateorCreate(
                    [
                        "id_Planeacion" => $id_planeacion,
                        "id_tipo_Penetracion" => $id_tipo_Penetracion[$a],
                        "id_tipo_preguntaansorfts" => $id_tipo_preguntaansorfts[$i],

                    ],
                    [
                        "id_tipo_preguntaansorfts" => $id_tipo_preguntaansorfts[$i],
                        "id_Planeacion" => $id_planeacion,
                        "id_tipo_Penetracion" => $id_tipo_Penetracion[$a],
                        "Peso_Relativo" => $Peso_Relativo[$a],
                        "Calificación" => $Calificación[$a],
                        "Peso_Ponderado" => $Peso_Ponderado[$a]
                    ]
                );
            }
        }

        


                  

        $DesaMerca = TipoPreguntaansorft::select('tipo_preguntaansorfts.*')
        ->where('idTipo',1)
        ->get();


        $tipo_Penetracion=tipo_Desarrollo_Producto::all();


        $DesaMerca2 = TipoPreguntaansorft::select('tipo_preguntaansorfts.*')
        ->where('idTipo',1)
        ->get();


        $tipo_Penetracion2=tipo_Desarrollo_Producto::all();


        
        $DesaMerca3 = TipoPreguntaansorft::select('tipo_preguntaansorfts.*')
        ->where('idTipo',1)
        ->get();


        $tipo_Penetracion3=tipo_Desarrollo_Producto::all();



        
        $DesaMerca4 = TipoPreguntaansorft::select('tipo_preguntaansorfts.*')
        ->where('idTipo',1)
        ->get();


        $tipo_Penetracion4=tipo_Desarrollo_Producto::all();

        $DesaMerca5 = TipoPreguntaansorft::select('tipo_preguntaansorfts.*')
        ->where('idTipo',1)
        ->get();
        $tipo_Penetracion5 =tipo_Desarrollo_Producto::all(); 

        
        $DesaMerca6 = TipoPreguntaansorft::select('tipo_preguntaansorfts.*')
        ->where('idTipo',1)
        ->get();


        $tipo_Penetracion6 =tipo_Desarrollo_Producto::all(); 


        $DesaMerca7 = TipoPreguntaansorft::select('tipo_preguntaansorfts.*')
        ->where('idTipo',1)
        ->get();


        $tipo_Penetracion7 =tipo_Desarrollo_Producto::all(); 



         return view('Modulo2.ansorftDesarrollo')->with(compact('DesaMerca','tipo_Penetracion','DesaMerca2','tipo_Penetracion2','DesaMerca3',
         'tipo_Penetracion3','DesaMerca4','tipo_Penetracion4','DesaMerca5','tipo_Penetracion5','DesaMerca6','tipo_Penetracion6','id_planeacion','DesaMerca7','tipo_Penetracion7'));




        // $ansorft = ansorft::select('ansorfts.*','tipo_mercado.Nametipo_mercado','tipo_preguntaansorfts.nombre','tipo_preguntaansorfts.id')
        // ->join('tipo_mercado','ansorfts.id_tipo_mercado','tipo_mercado.id_tipo_mercado')
        // ->join('tipo_preguntaansorfts','ansorfts.idTipoPregunta','tipo_preguntaansorfts.id')
        // ->where('idPlaneacion',$id_planeacion)
        // ->get();


  
        // $cantidadMercado= count($ansorft);

        // ///Sustitutos
        // $Sustitutos = ansorft::select('ansorfts.*','tipo_mercado.Nametipo_mercado','tipo_preguntaansorfts.nombre','tipo_preguntaansorfts.id')
        // ->join('tipo_mercado','ansorfts.id_tipo_mercado','tipo_mercado.id_tipo_mercado')
        // ->join('tipo_preguntaansorfts','ansorfts.idTipoPregunta','tipo_preguntaansorfts.id')
        // ->where('tipo_mercado.Nametipo_mercado',"Sustitutos")
        // ->where('idPlaneacion',$id_planeacion)
        // ->get();


        // ///Producto
        // $Producto = ansorft::select('ansorfts.*','tipo_mercado.Nametipo_mercado','tipo_preguntaansorfts.nombre','tipo_preguntaansorfts.id')
        // ->join('tipo_mercado','ansorfts.id_tipo_mercado','tipo_mercado.id_tipo_mercado')
        // ->join('tipo_preguntaansorfts','ansorfts.idTipoPregunta','tipo_preguntaansorfts.id')
        // ->where('tipo_mercado.id_tipo_mercado',"2")
        // ->where('idPlaneacion',$id_planeacion)
        // ->get();

        // ///Productotitutos
        // $Productotitutos = ansorft::select('ansorfts.*','tipo_mercado.Nametipo_mercado','tipo_preguntaansorfts.nombre','tipo_preguntaansorfts.id')
        // ->join('tipo_mercado','ansorfts.id_tipo_mercado','tipo_mercado.id_tipo_mercado')
        // ->join('tipo_preguntaansorfts','ansorfts.idTipoPregunta','tipo_preguntaansorfts.id')
        // ->where('tipo_mercado.Nametipo_mercado',"Forma de Uso y Aplicación del Productotitutos")
        // ->where('idPlaneacion',$id_planeacion)
        // ->get();
                
        
      
        //  ///  Intercambio de Tecnología
        // $Tecnología = ansorft::select('ansorfts.*','tipo_mercado.Nametipo_mercado','tipo_preguntaansorfts.nombre','tipo_preguntaansorfts.id')
        // ->join('tipo_mercado','ansorfts.id_tipo_mercado','tipo_mercado.id_tipo_mercado')
        // ->join('tipo_preguntaansorfts','ansorfts.idTipoPregunta','tipo_preguntaansorfts.id')
        // ->where('tipo_mercado.Nametipo_mercado',"Intercambio de Tecnología")
        // ->where('idPlaneacion',$id_planeacion)
        // ->get();
                      
        
        // /// Geográficamente
        // $Geográficamente = ansorft::select('ansorfts.*','tipo_mercado.Nametipo_mercado','tipo_preguntaansorfts.nombre','tipo_preguntaansorfts.id')
        // ->join('tipo_mercado','ansorfts.id_tipo_mercado','tipo_mercado.id_tipo_mercado')
        // ->join('tipo_preguntaansorfts','ansorfts.idTipoPregunta','tipo_preguntaansorfts.id')
        // ->where('tipo_mercado.Nametipo_mercado',"Geográficamente")
        // ->where('idPlaneacion',$id_planeacion)
        // ->get(); 
        
        // //Segmentación
        // $Segmentación = ansorft::select('ansorfts.*','tipo_mercado.Nametipo_mercado','tipo_preguntaansorfts.nombre','tipo_preguntaansorfts.id')
        // ->join('tipo_mercado','ansorfts.id_tipo_mercado','tipo_mercado.id_tipo_mercado')
        // ->join('tipo_preguntaansorfts','ansorfts.idTipoPregunta','tipo_preguntaansorfts.id')
        // ->where('tipo_mercado.Nametipo_mercado',"Segmentación")
        // ->where('idPlaneacion',$id_planeacion)
        // ->get(); 

        // //Alianzas Convenios
        // $Convenios = ansorft::select('ansorfts.*','tipo_mercado.Nametipo_mercado','tipo_preguntaansorfts.nombre','tipo_preguntaansorfts.id')
        // ->join('tipo_mercado','ansorfts.id_tipo_mercado','tipo_mercado.id_tipo_mercado')
        // ->join('tipo_preguntaansorfts','ansorfts.idTipoPregunta','tipo_preguntaansorfts.id')
        // ->where('tipo_mercado.Nametipo_mercado',"Alianzas Convenios")
        // ->where('idPlaneacion',$id_planeacion)
        // ->get(); 

        // //Promoción
        // $Promoción = ansorft::select('ansorfts.*','tipo_mercado.Nametipo_mercado','tipo_preguntaansorfts.nombre','tipo_preguntaansorfts.id')
        // ->join('tipo_mercado','ansorfts.id_tipo_mercado','tipo_mercado.id_tipo_mercado')
        // ->join('tipo_preguntaansorfts','ansorfts.idTipoPregunta','tipo_preguntaansorfts.id')
        // ->where('tipo_mercado.Nametipo_mercado',"Promoción")
        // ->where('idPlaneacion',$id_planeacion)
        // ->get(); 
        

        // $datos = count(ansorft::all());
        


        // return view('Modulo2.ansorftDesarrolloMerca')->with(compact('ansorft','datos','DesaMerca','id_planeacion','tipo_mercado','Sustitutos','Producto','Productotitutos','Tecnología','Geográficamente','Segmentación','Convenios','Promoción','cantidadMercado'));

    }
}
