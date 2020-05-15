<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\ansorft;
use App\Model\penetracion_mercadoanf;
use App\Model\Penetracion_tipo;
use App\Model\respuesta_penetracion;
use DB;
use Validator;
class storageAnsController extends Controller
{
    public function storage(Request $request){

        $Penetracion_tipo = Penetracion_tipo::all();
        $Penetracion_tipo2 = Penetracion_tipo::all();
        $Penetracion_tipo3 = Penetracion_tipo::all();
        $Penetracion_tipo4 = Penetracion_tipo::all();
        $Penetracion_tipo5 = Penetracion_tipo::all();
        $Penetracion_tipo6 = Penetracion_tipo::all();
        $Penetracion_tipo7 = Penetracion_tipo::all();






        // $respuesta_penetracion =respuesta_penetracion::all();

        $planeacion = $request->input('idPlaneacion');
        $id_tipo_mercado = $request->input('id_tipo_mercado');
        $idTipo = $request->input('preguntas');
        $pesoRelativo = $request->input('pesoRelativo');
        $calificacion = $request->input('calificacion');
        $pesoPonderado = $request->input('pesoPonderado');
    
            for ($a=0; $a < count($id_tipo_mercado) ; $a++) { 
                for ($i = 0; $i < count($idTipo); $i++) {
                    
                    ansorft::updateorCreate(
                        [
                            'idPlaneacion' => $planeacion,
                            'idTipoPregunta' => $idTipo[$i],
                            'id_tipo_mercado' => $id_tipo_mercado[$a],
                        ],
                        [
                        
                            'idPlaneacion' => $planeacion,
                            'id_tipo_mercado' =>$id_tipo_mercado[$a],
                            'idTipoPregunta' => $idTipo[$i],
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

        
        //Adquisición o Fusión de Empresas
        // $Adquisicionid = respuesta_penetracion::select('id_Planeacion')
        // ->where('id_Planeacion',$planeacion)
        // ->get();

        $Adquisicion = respuesta_penetracion::select('respuesta_penetracion.*','penetracion_mercadoanf.name_penetracion_mercadoanf')
        ->join('penetracion_mercadoanf', 'respuesta_penetracion.id_penetracion_mercadoanf','penetracion_mercadoanf.id_penetracion_mercadoanf')
        ->join('tipo_penetración','respuesta_penetracion.id_tipo_Penetracion','tipo_penetración.id_tipo_Penetración')
        ->where('tipo_penetración.name_tipo_Penetración',"Adquisición o Fusión de Empresas")
        ->where('id_Planeacion',$planeacion)
        ->get();


        $cantidadAdquisicion= count($Adquisicion);
       

        //Adquisición de Marca

        $Marca = respuesta_penetracion::select('respuesta_penetracion.*','penetracion_mercadoanf.name_penetracion_mercadoanf')
        ->join('penetracion_mercadoanf', 'respuesta_penetracion.id_penetracion_mercadoanf','penetracion_mercadoanf.id_penetracion_mercadoanf')
        ->join('tipo_penetración','respuesta_penetracion.id_tipo_Penetracion','tipo_penetración.id_tipo_Penetración')
        ->where('tipo_penetración.name_tipo_Penetración',"Adquisición de Marca")
        ->where('id_Planeacion',$planeacion)
        ->get();


        $cantidadMarca= count($Marca);

        //Nuevos Nichos de Mercado

        $Mercado=respuesta_penetracion::select('respuesta_penetracion.*','penetracion_mercadoanf.name_penetracion_mercadoanf')
        ->join('penetracion_mercadoanf', 'respuesta_penetracion.id_penetracion_mercadoanf','penetracion_mercadoanf.id_penetracion_mercadoanf')
        ->join('tipo_penetración','respuesta_penetracion.id_tipo_Penetracion','tipo_penetración.id_tipo_Penetración')
        ->where('tipo_penetración.name_tipo_Penetración',"Nuevos Nichos de Mercado")
        ->where('id_Planeacion',$planeacion)
        ->get();


        $cantidadMercado= count($Mercado);

        //Investigación


        $Investigacion=respuesta_penetracion::select('respuesta_penetracion.*','penetracion_mercadoanf.name_penetracion_mercadoanf')
        ->join('penetracion_mercadoanf', 'respuesta_penetracion.id_penetracion_mercadoanf','penetracion_mercadoanf.id_penetracion_mercadoanf')
        ->join('tipo_penetración','respuesta_penetracion.id_tipo_Penetracion','tipo_penetración.id_tipo_Penetración')
        ->where('tipo_penetración.name_tipo_Penetración',"Investigación")
        ->where('id_Planeacion',$planeacion)
        ->get();


        $cantidadInvestigacion= count($Investigacion);

        //Incorporación de Nuevos Servicios

        $Servicios=respuesta_penetracion::select('respuesta_penetracion.*','penetracion_mercadoanf.name_penetracion_mercadoanf')
        ->join('penetracion_mercadoanf', 'respuesta_penetracion.id_penetracion_mercadoanf','penetracion_mercadoanf.id_penetracion_mercadoanf')
        ->join('tipo_penetración','respuesta_penetracion.id_tipo_Penetracion','tipo_penetración.id_tipo_Penetración')
        ->where('tipo_penetración.name_tipo_Penetración',"Incorporación de Nuevos Servicios")
        ->where('id_Planeacion',$planeacion)
        ->get();



        $cantidadServicios = count($Servicios);

        //Controlar o Adquirir Dominio de Distribuidores o Detallista
         $Distribuidores=respuesta_penetracion::select('respuesta_penetracion.*','penetracion_mercadoanf.name_penetracion_mercadoanf')
         ->join('penetracion_mercadoanf', 'respuesta_penetracion.id_penetracion_mercadoanf','penetracion_mercadoanf.id_penetracion_mercadoanf')
         ->join('tipo_penetración','respuesta_penetracion.id_tipo_Penetracion','tipo_penetración.id_tipo_Penetración')
         ->where('tipo_penetración.name_tipo_Penetración',"Controlar o Adquirir Dominio de Distribuidores o Detallista")
         ->where('id_Planeacion',$planeacion)
         ->get();




        //Controlar o Adquirir Dominio de Distribuidores o Detallista
        $Proveedores=respuesta_penetracion::select('respuesta_penetracion.*','penetracion_mercadoanf.name_penetracion_mercadoanf')
        ->join('penetracion_mercadoanf', 'respuesta_penetracion.id_penetracion_mercadoanf','penetracion_mercadoanf.id_penetracion_mercadoanf')
        ->join('tipo_penetración','respuesta_penetracion.id_tipo_Penetracion','tipo_penetración.id_tipo_Penetración')
        ->where('tipo_penetración.name_tipo_Penetración',"Controlar o Adquirir el Dominio de los Proveedores")
        ->where('id_Planeacion',$planeacion)
        ->get();
        
        $cantidadProveedores = count($Proveedores);


        //Controlar o Adquirir Dominio de Distribuidores o Detallistas
        $Detallistas=respuesta_penetracion::select('respuesta_penetracion.*','penetracion_mercadoanf.name_penetracion_mercadoanf')
        ->join('penetracion_mercadoanf', 'respuesta_penetracion.id_penetracion_mercadoanf','penetracion_mercadoanf.id_penetracion_mercadoanf')
        ->join('tipo_penetración','respuesta_penetracion.id_tipo_Penetracion','tipo_penetración.id_tipo_Penetración')
        ->where('tipo_penetración.name_tipo_Penetración',"Controlar o Adquirir Dominio de Distribuidores o Detallistas")
        ->where('id_Planeacion',$planeacion)
        ->get();

        $DetallistasCanti = count($Detallistas);



      

      

        //penetracion_mercadoanf tabla
         $penetracion_mercadoanf =  penetracion_mercadoanf::all();


            return view('Modulo2.ansorftDiversificacion')->with(compact('penetracion_mercadoanf','planeacion','Penetracion_tipo','Adquisicion','Marca','cantidadMercado','Penetracion_tipo4','cantidadServicios','Penetracion_tipo6','Penetracion_tipo7'))
            ->with(compact('Mercado','Investigacion','Servicios','Distribuidores','Penetracion_tipo2','Penetracion_tipo3','cantidadAdquisicion','cantidadMarca','cantidadInvestigacion','Penetracion_tipo5','Proveedores','cantidadProveedores','Detallistas','DetallistasCanti'));
    }




        



        }

    

