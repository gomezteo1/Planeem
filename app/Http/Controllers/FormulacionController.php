<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\estrategia;
use App\Model\respuesta_verbo;
use App\Model\Proyectos;
use App\Model\formulacionestrategias;
use DB;

class FormulacionController extends Controller
{
    public function index(Request $request){
            $id = $request->input('id_planecion');
            $proyecto = Proyectos::find($id);
            $estrategia = estrategia::all();
            $Objetivos = respuesta_verbo::select('id_respustaverbos','Objetivos','id_Planeacion','posiciones')
            ->where('id_Planeacion',$id)
            ->get();
            $cantidad = count($Objetivos); 


            $typeA = ['aAlta', 'aMedia', 'aBaja'];
            $typeO = ['oAlta', 'oMedia', 'oBaja'];

            $amenaza= DB::table('respuesta_analisis')
            ->select('nombre')
            ->join('analisis', 'analisis.id', 'respuesta_analisis.idanalisis')
            ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_analisis.idPlaneacion')
            ->whereIn('respuesta', $typeA)
            ->where('idPlaneacion', $id)
            ->get();
            

            $oportunidad=DB::table('respuesta_analisis')
            ->select('nombre')
            ->join('analisis', 'analisis.id', 'respuesta_analisis.idanalisis')
            ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_analisis.idPlaneacion')
            ->whereIn('respuesta', $typeO)
            ->where('idPlaneacion', $id)
            ->get();

            $typeF = ['fAlta', 'fMedia', 'fBaja'];
            $typeD = ['dAlta', 'dMedia', 'dBaja'];

            $fortaleza= DB::table('respuesta_capacidad')
            ->select('nombre')
            ->join('capacidads', 'capacidads.id', 'respuesta_capacidad.idCapacidad')
            ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_capacidad.idPlaneacion')
            ->whereIn('respuesta', $typeF)
            ->where('idPlaneacion', $id)
            ->get();

            $debilidad= DB::table('respuesta_capacidad')
            ->select('nombre')
            ->join('capacidads', 'capacidads.id', 'respuesta_capacidad.idCapacidad')
            ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_capacidad.idPlaneacion')
            ->whereIn('respuesta', $typeD)
            ->where('idPlaneacion', $id)
            ->get();


            return view('Modulo3.FormulacionAsociar')->with(compact('proyecto','Objetivos','cantidad','estrategia','debilidad','fortaleza','amenaza','oportunidad','fortaleza','debilidad'));
    }

    public function guardar(Request $request){

        $Objetivos = $request->input('Objetivos');
        $id_planecion = $request->input('id_planecion');
        $posiciones = $request->input('posiciones');
        
    for ($i=0; $i < count($posiciones) ; $i++) {

        respuesta_verbo::updateOrCreate(
            [
                'id_Planeacion'=> $id_planecion,
                'posiciones'=> $posiciones[$i],
            ],

            [
                'posiciones'=> $posiciones[$i],
                'Objetivos'=> $Objetivos[$i],
                'id_Planeacion'=> $id_planecion
            ]
        );
        

    }

        return view('Modulo3.FormulacionInfo')->with('id_planecion',$id_planecion);
        
    }

    public function storeage(Request $request){

            $id_estrategia = $request->input('id_estrategia');
            $pocision = $request->input('pocision');
            $id_respustaverbos = $request->input('id_respustaverbos');
            $id_planecion = $request->input('id_planecion');

            $id_planecion = $request->input('id_planecion');
            // dd($id_planecion);

            
                for ($i=0; $i < count($id_respustaverbos) ; $i++) { 


                    
                    formulacionestrategias::updateorCreate(
                        [
                            'id_Planeacion'=>$id_planecion,
                            'id_respustaverbos'=>$id_respustaverbos[$i],
                            'id_estrategia' => $id_estrategia[$i],
                        ],
                        [
                            'id_Planeacion'=>$id_planecion,
                            'id_respustaverbos'=>$id_respustaverbos[$i],
                            'id_estrategia' => $id_estrategia[$i],
                            'pocision' => $pocision[$i]
                        ]
                    );
                  
                
            }

            
            $proyecto = Proyectos::find($id_planecion);

            $estrategia = estrategia::all();


            $Objetivos = DB::table('formulacionestrategias')
            ->join('planeacion','formulacionestrategias.id_Planeacion','=','planeacion.id_Planeacion')
            ->join('respustaverbos','formulacionestrategias.id_respustaverbos' ,'=', 'respustaverbos.id_respustaverbos')
            ->join('estrategia', 'formulacionestrategias.id_estrategia','=','estrategia.id_estrategia')
            ->select('formulacionestrategias.pocision', 'respustaverbos.Objetivos', 'estrategia.Name_estrategia')
            ->where('planeacion.id_Planeacion',$id_planecion)
            ->get();

            $typeA = ['aAlta', 'aMedia', 'aBaja'];
            $typeO = ['oAlta', 'oMedia', 'oBaja'];


            $amenaza= DB::table('respuesta_analisis')
            ->select('nombre')
            ->join('analisis', 'analisis.id', 'respuesta_analisis.idanalisis')
            ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_analisis.idPlaneacion')
            ->whereIn('respuesta', $typeA)
            ->where('idPlaneacion', $id_planecion)
            ->get();

           
            
            // $formulacion = DB::table('formulacionestrategias')
            // ->select('formulacionestrategias.*','respustaverbos.*')
            // ->join('respustaverbos','formulacionestrategias.id_respustaverbos','=','respustaverbos.id_respustaverbos')
            // ->where('formulacionestrategias.id_Planeacion',$id_planecion)
            // ->get();  


            
            $formulacion = DB::table('respustaverbos')
            ->select('respustaverbos.*','formulacionestrategias.*')
            ->join('formulacionestrategias','respustaverbos.id_respustaverbos','=','formulacionestrategias.id_respustaverbos')
            ->where('formulacionestrategias.id_Planeacion',$id_planecion)
            ->get();  
            //dd($formulacion);

            // dd($formulacion);
            

            //esto me recibe la data del controlador y la manda a la vista :p
            return view('Modulo3.FormulacionResumen')->with('Objetivos',$Objetivos)->with('proyecto',$proyecto)->with('amenaza',$amenaza)->with('formulacion',$formulacion);
            
    }

        // public function  ObjetivosResumen($id){
        //     $proyecto = Proyectos::find($id);
        //     return view('Modulo3.ObjetivosResumen')->with('Objetivos',$Objetivos);
        // }
}
