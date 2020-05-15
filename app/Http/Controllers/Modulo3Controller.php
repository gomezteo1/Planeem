<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Model\Proyectos;
use App\Model\Verbos;

use App\Model\respuesta_verbo;

class Modulo3Controller extends Controller
{


    public function estrategias(Request $request){
        
        $id_plane = Proyectos::all();
        $proyecto = Proyectos::all();
        $proyecto->nombre_proyecto=$request->input('nombre_proyecto');
        return view('Modulo3.formulacion_de_estrategias.tercero1-1')->with('id_plane',$id_plane)->with('proyecto',$proyecto);
    }

    public function Verbos(Request $request){

        $nombre =$request->input('nombre_proyecto');
        $proyecto = $nombre;
        $Verbos = Verbos::all();
        $id_plane = Proyectos::all();
        return view('Modulo3.DisenoObjetivos3')->with('id_plane',$id_plane)->with('proyecto',$proyecto)->with('Verbos',$Verbos);
    }

    //Desde Aca comienza el crud
    // public function listAll(){
         
    //     $formulacion = DB::table('respustaverbos')->select('id_respuestasverbos','Objetivos')        
    //     ->where('id_Planeacion',$id_Planeacion)
    //     ->get();  
    //     //   return response()->json($formulacion);
    //     return view('Modulo3.DisenoObjetivos3'); }
    
//     public function createAll(){
//         'posiciones'=> $posiciones[$i],
// //          'Objetivos'=> $Objetivos[$i],
// //                 'id_Planeacion'=> $id_planecion,
//     }
    
//     public function editAll(){
//         'posiciones'=> $posiciones[$i],
// //                 'Objetivos'=> $Objetivos[$i],
// //                 'id_Planeacion'=> $id_planecion,
//     }


    public function guardar(Request $request){

        $Objetivos = $request->input('Objetivos');
        $id_planecion = $request->input('id_planecion');

        $posiciones = $request->input('posiciones');
        
    for ($i=0; $i < count($posiciones) ; $i++) {
        
            respuesta_verbo::updateOrCreate([
                'posiciones'=> $posiciones[$i],
                'Objetivos'=> $Objetivos[$i],
                'id_Planeacion'=> $id_planecion,
            ],
            [
                'posiciones'=> $posiciones[$i],
                'Objetivos'=> $Objetivos[$i],
                'id_Planeacion'=> $id_planecion,
            ]  
        
        );

    }

        return view('Modulo3.FormulacionInfo')->with('id_planecion',$id_planecion);
        
    }


//    // Con este método, se obtienen los datos de la tabla  respustaverbos
    public function vervoslis($id){

            $formulacion = DB::table('respustaverbos')
            ->where('id_Planeacion',$id)
            ->get();  

            return response()->json($formulacion);
    }



    public function posicion($id){

        $formulacion = DB::table('respustaverbos')
        ->select(DB::raw('MAX(posiciones) as posiciones'))//se le indica el datos con mayor resultado
        ->where('id_Planeacion',$id)
        ->get();  

        return response()->json($formulacion);
    }

    // Eliminar verbos de la vista analisis dofa
    public function EV($id){
        DB::table('respustaverbos')
        ->where('id_respustaverbos ',$id)
        ->first()
        ->delete();
        
    //    if(!isset($id)){
    //         return response()->json(['message'=>'No existe la data']); 
    //     }else{
    //         return response()->json(['message'=>'Si existe la data']); 
    //     }
    }

    
}
