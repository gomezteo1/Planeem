<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\formulacionestrategias;
use DB;

// Consulta a la base de datos de formulación Estrategias
class IndicadoresDeObjetivosController extends Controller
{
    //
    public function index ($id){
        $formulacionestrategias=DB::table('respustaverbos')
            ->select('respustaverbos.*','planeacion.nombre_proyecto')
            ->join('planeacion','respustaverbos.id_Planeacion','planeacion.id_Planeacion')
            ->where('planeacion.id_Planeacion',$id)
            ->get();
                return response()->json($formulacionestrategias);
    }
    public function indicador ($id){
        $formulacionestrategias=DB::table('respustaverbos')
            ->select('respustaverbos.*','planeacion.nombre_proyecto')
            ->join('planeacion','respustaverbos.id_Planeacion','planeacion.id_Planeacion')
            ->where('respustaverbos.id_respustaverbos',$id)
            ->get();
       // var_dump($formulacionestrategias);
       return response()->json($formulacionestrategias);
    }
}