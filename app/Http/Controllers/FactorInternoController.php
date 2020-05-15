<?php

namespace App\Http\Controllers;

use App\Model\factorInterno;
use App\Model\Proyectos;
use App\Model\respuestaCapacidad;
use App\Model\respuestaAnalisis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


class FactorInternoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $id_planeacion = Proyectos::all();

        $id = $request->input('id_Planecion');
        $type = ['fAlta', 'fMedia', 'fBaja'];

        $fortaleza = respuestaCapacidad::select('capacidads.nombre', 'capacidads.id as idCapacidad')
            ->join('capacidads', 'capacidads.id', 'respuesta_capacidad.idCapacidad')
            ->whereIn('respuesta', $type)
            ->where('idPlaneacion', $id)
            ->get();

        $type2 = ['dAlta', 'dMedia', 'dBaja'];

        $debilidad = respuestaCapacidad::select('capacidads.nombre', 'capacidads.id as idCapacidad')
            ->join('capacidads', 'capacidads.id', 'respuesta_capacidad.idCapacidad')
            ->whereIn('respuesta', $type2)
            ->where('idPlaneacion', $id)
            ->get();

        return view('Modulo2.factoresInternos')->with(compact('fortaleza', 'debilidad', 'id', 'id_planeacion'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $factorF = factorInterno::all();
        $planeacion = Proyectos::all();

        return view('Modulo2.factoresInternos')->with(compact('factorf', 'planeacion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $plane = $request->get('idPlaneacion');
        $pone = $request->get('ponderacion');
        $cali = $request->get('calificacion');
        $puntua = $request->get('puntuacionPonderada');
        $totalCalificacion = $request->input('totalCalificacion');
        $totalPuntuacion = $request->input('totalPuntuacion');
        $puntuacionPonderada = $request->input('puntuacionPonderad1');

            // dd($totalCalificacion,$totalPuntuacion,$puntuacionPonderada);
        for ($i = 0; $i < count($request->get('preguntas')); $i++) {

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
                    'totalPonderacion'=>$puntuacionPonderada
                ]
            );
        }



        $message = array(
            'message' => 'Factor interno de fortalezas Guardado con Éxito',
            'alert-type' => 'success'
        );



        $id_planeacion = Proyectos::all();

    
        // dd($id);

        $type = ['fAlta','fMedia','fBaja'];
 
        $fortaleza=respuestaCapacidad::select('capacidads.nombre' , 'capacidads.id as idCapacidad')
        ->join('capacidads','capacidads.id','respuesta_capacidad.idCapacidad')
        ->whereIn('respuesta',$type)
        ->where('idPlaneacion',$plane)
        ->get();

        // dd($fortaleza);

        // dd($fortaleza);

        $type2 = ['dAlta','dMedia','dBaja'];

        $debilidad=respuestaCapacidad::select('capacidads.nombre' , 'capacidads.id as idCapacidad')
        ->join('capacidads','capacidads.id','respuesta_capacidad.idCapacidad')
        ->whereIn('respuesta',$type2)
        ->where('idPlaneacion',$plane)
        ->get();


        return view('Modulo2.factoresInternosDebi')->with(compact('fortaleza','debilidad','id_planeacion','plane'))->with($message);

    
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

        $res = factorInterno::select('idRespuestaCapacidad as respuesta', 'ponderacion', 'calificacion', 'puntuacionPonderada','totalCalificacion','puntuacionPonderada','totalCalificacion')
            ->join('respuesta_capacidad', 'respuesta_capacidad.id', 'factor_internos.idRespuestaCapacidad')
            ->join('planeacion', 'planeacion.id_Planeacion', 'factor_internos.idPlaneacion')
            ->where('factor_internos.idPlaneacion', $id)
            ->get();


        // $res = respuestaAnalisis::select('respuesta as idRespuesta', 'idanalisis as analisis', 'idPlaneacion as planeacion')
        // ->join('analisis', 'analisis.id', 'respuesta_analisis.idanalisis')
        // ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_analisis.idPlaneacion')
        // ->where('idPlaneacion', $id)
        // ->get();



        //    dd($res);

        return response()->json($res);
    }
}
