<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Model\misEstrategias;
use App\Model\Proyectos;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use DB;
use Illuminate\Contracts\Validation\Validator as ValidationValidator;

class MisEstrategiasController extends Controller
{
 
   

    public function index(Request $request)
    {   
       
        $id = $request->input('id_Planeacion');
        // $id_planeacion = Proyectos::all();
        //   dd($id);
        
        
           
        // $res = respuestaAnalisis::select('respuesta as idRespuesta', 'idanalisis as analisis', 'idPlaneacion as planeacion')
        // ->join('analisis', 'analisis.id', 'respuesta_analisis.idanalisis')
        // ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_analisis.idPlaneacion')
        // ->where('idPlaneacion', $id)
        // ->get();


         $typeA = ['aAlta', 'aMedia', 'aBaja'];
         $typeO = ['oAlta', 'oMedia', 'oBaja'];
         $typeF = ['fAlta', 'fMedia', 'fBaja'];
         $typeD = ['dAlta', 'dMedia', 'dBaja'];
    
        $fortaleza= DB::table('respuesta_capacidad')
        ->select('nombre')
        ->join('capacidads', 'capacidads.id', 'respuesta_capacidad.idCapacidad')
        ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_capacidad.idPlaneacion')
        ->whereIn('respuesta', $typeF)
        ->where('idPlaneacion', $id)
        ->get();
        $fortaleza2= DB::table('respuesta_capacidad')
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
        $debilidad2 = DB::table('respuesta_capacidad')
        ->select('nombre')
        ->join('capacidads', 'capacidads.id', 'respuesta_capacidad.idCapacidad')
        ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_capacidad.idPlaneacion')
        ->whereIn('respuesta', $typeD)
        ->where('idPlaneacion', $id)
        ->get();
        $oportunidad=DB::table('respuesta_analisis')
        ->select('nombre')
        ->join('analisis', 'analisis.id', 'respuesta_analisis.idanalisis')
        ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_analisis.idPlaneacion')
        ->whereIn('respuesta', $typeO)
        ->where('idPlaneacion', $id)
        ->get();
        $oportunidad2=DB::table('respuesta_analisis')
        ->select('nombre')
        ->join('analisis', 'analisis.id', 'respuesta_analisis.idanalisis')
        ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_analisis.idPlaneacion')
        ->whereIn('respuesta', $typeO)
        ->where('idPlaneacion', $id)
        ->get();
       $amenaza= DB::table('respuesta_analisis')
        ->select('nombre')
        ->join('analisis', 'analisis.id', 'respuesta_analisis.idanalisis')
        ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_analisis.idPlaneacion')
        ->whereIn('respuesta', $typeA)
        ->where('idPlaneacion', $id)
        ->get();
       $amenaza2= DB::table('respuesta_analisis')
        ->select('nombre')
        ->join('analisis', 'analisis.id', 'respuesta_analisis.idanalisis')
        ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_analisis.idPlaneacion')
        ->whereIn('respuesta', $typeA)
        ->where('idPlaneacion', $id)
        ->get();

        
        $misEstrategias1 =  misEstrategias::all();
    
        // $misEstrategias=DB::table('mis_estrategias')
        // ->select('estrategia')
        // ->join( 'planeacion', 'mis_estrategias.id_Planeacion' , 'planeacion.id_Planeacion' )
        // ->where( 'planeacion.id_Planeacion' , $id)
        // ->get();
        // response()->json($misEstrategias);


        return view('Modulo2.misEstrategiasD.misEstrategias')->with(compact('misEstrategias1','id','oportunidad','oportunidad2','amenaza','amenaza2','fortaleza','fortaleza2','oportunidad','oportunidad2','debilidad','debilidad2'));
    }

    public function create()
    {
       
    }

    public function store(Request $request)
    {
        $misEstrategiasAgregar = new misEstrategias;
        $misEstrategiasAgregar->estrategia = $request->estrategia;
        $misEstrategiasAgregar->id_Planeacion = $request->id_Planeacion;
        $misEstrategiasAgregar->save();
        return back()->with('Agregar','La estrategia se ha agregado correctamente');
    }

    public function show(Request $request)
    {    //Esto tiene que estar descomentado
      
        {
        try {
          $id = $request->id;
          
          $data = misEstrategias::findOrFail($id);
          return response()->json([
            "ok" => true,
            "data" => $data
          ]);
        } catch (\Throwable $th) {
          return response()->json([
            "ok" => false,
            "message" => $th
          ]);
        }
      }
    }

    public function edit($id)
    {  
       //  $misEstrategias = misEstrategias::findOrFail($id);
       //  return view("/Modulo2.misEstrategiasD.misEstrategias", compact("misEstrategias"));

    }
    
    public function update(Request $request)
    {
        // $input = $request->all();
        // $misEstrategias = misEstrategias::findOrFail($input["id"]);
     
        // misEstrategias::update([
        // "estrategias"=>$input["estrategias"],
        // "id_Planeacion"=>$input["id_Planeacion"],
        // ]);
        //     return redirect("/Modulo2.misEstrategias");
         

        //Esto tiene que estar descomentado

        $input = $request->all();
        $id = $request->id;
        $validator = Validator::make($input, [
          "estrategia" => "required",
        ]);
        if ($validator->fails()) {
          return response()->json([
            'ok' => false,
            'message' => $validator->messages()
          ]);
        }
        try {
  
          $list = misEstrategias::find($id);
          $list->update($input);
          return response()->json([
            "ok" => true,
            "message" => "Estrategia Actualizada con Exito."
          ]);
        } catch (\Exception $ex) {
          return response()->json([
            "ok" => false,
            "error" => $ex->getMessage()
          ]);
        }
       
    }
    
    public function destroy($id)
    {
        //
    }
}
