<?php

namespace App\Http\Controllers;

use App\Model\factorInterno;
use App\Model\Proyectos;
use App\Model\respuestaCapacidad;
use App\Model\respuestaAnalisis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Validator;

class FactorInternoDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $id_planeacion = Proyectos::all();

        $id = auth()->user()->selected_planne;

    
        // dd($id);

        $type = ['fAlta','fMedia','fBaja'];
 
        $fortaleza=respuestaCapacidad::select('capacidads.nombre' , 'capacidads.id as idCapacidad')
        ->join('capacidads','capacidads.id','respuesta_capacidad.idCapacidad')
        ->whereIn('respuesta',$type)
        ->where('idPlaneacion',$id)
        ->get();

        // dd($fortaleza);

        // dd($fortaleza);

        $type2 = ['dAlta','dMedia','dBaja'];

        $debilidad=respuestaCapacidad::select('capacidads.nombre' , 'capacidads.id as idCapacidad')
        ->join('capacidads','capacidads.id','respuesta_capacidad.idCapacidad')
        ->whereIn('respuesta',$type2)
        ->where('idPlaneacion',$id)
        ->get();

        // dd($debilidad);

        

        return view('Modulo2.factoresInternosDebi')->with(compact('fortaleza','debilidad','id','id_planeacion'));
        
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $factorF=factorInterno::all();
        $planeacion = Proyectos::all();

        return view('Modulo2.factoresInternosDebi')->with(compact('factorF','planeacion'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

        // $data = $request->all();
        // if(empty($data)) {
        //     $data = json_decode($request->getContent());
        //     $data = json_decode($data);

        //     if(is_null($data)) {
        //         return response()->json("Not valid json", 400);
        //     }
        // }

        $plane = $request->get('idPlaneacion');
        $pone = $request->get('ponderacion');
        $cali = $request->get('calificacion');
        $puntua = $request->get('puntuacionPonderada');
        $totalCalificacion = $request->input('totalCalificacion');
        $totalPuntuacion = $request->input('totalPuntuacion');
        $puntuacionPonderada = $request->input('puntuacionPonderad1');
        $preguntas =$request->get('preguntas');
           
            // dd($totalCalificacion,$totalPuntuacion,$puntuacionPonderada);
        for ($i = 0; $i < count($preguntas); $i++) {

            // print_r($pone);die;

            factorInterno::updateorCreate(

                [
                    'idRespuestaCapacidad' => $request->get('preguntas')[$i],
                    'idPlaneacion' => $plane,
                ],
                [
                    'idRespuestaCapacidad' => $request->get('preguntas')[$i],
                    'ponderacion' => $pone[$i],
                    'idPlaneacion' => $plane,
                    'calificacion' => $cali[$i],
                    'puntuacionPonderada' => $puntua[$i],
                    'totalCalificacion'=>$totalCalificacion,
                    'totalPuntuacion' => $totalPuntuacion,
                    'totalPonderacion'=>$puntuacionPonderada,
                    // 'preguntas'=>$preguntas

                ]
            );
        }


        $message = array(
            'message' => 'Factor interno de fortalezas Guardado con Éxito',
            'alert-type' => 'success'
        );
 
     return redirect('/anaPestal')->with($message);
}
        


           

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\factorInterno  $factorInterno
     * @return \Illuminate\Http\Response
     */
    public function show(factorInterno $factorInterno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\factorInterno  $factorInterno
     * @return \Illuminate\Http\Response
     */
    public function edit(factorInterno $factorInterno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\factorInterno  $factorInterno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, factorInterno $factorInterno)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\factorInterno  $factorInterno
     * @return \Illuminate\Http\Response
     */
    public function destroy(factorInterno $factorInterno)
    {
        //

    }

    public function getAnswers($id)
    {

        $res = factorInterno::select('idRespuestaCapacidad as respuesta', 'ponderacion', 'calificacion','puntuacionPonderada','totalCalificacion','puntuacionPonderada','totalCalificacion')
            ->join('respuesta_capacidad', 'respuesta_capacidad.id', 'factor_internos.idRespuestaCapacidad')
            ->join('planeacion', 'planeacion.id_Planeacion', 'factor_internos.idPlaneacion')
            ->where('factor_internos.idPlaneacion', $id)
            ->get();


        return response()->json($res);
    
}
}
