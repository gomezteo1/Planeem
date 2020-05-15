<?php

namespace App\Http\Controllers;

// use App\Model\capacidads;
use App\Model\capacidad;

use App\Model\tipoCapacidad;
use App\Model\Proyectos;
use App\Model\respuestaCapacidad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CapacidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //

        $id_planeacion = Proyectos::all();

        $capa = capacidad::all();

        $directiva = capacidad::select('capacidads.*')
            ->where('idTipo', 1)
            ->get();

        $competitiva = capacidad::select('capacidads.*')
            ->where('idTipo', 2)
            ->get();

        $financiera = capacidad::select('capacidads.*')
            ->where('idTipo', 3)
            ->get();

        $tecnologica = capacidad::select('capacidads.*')
            ->where('idTipo', 4)
            ->get();

        $humano = capacidad::select('capacidads.*')
            ->where('idTipo', 5)
            ->get();


        return view('Modulo2.capaInterna')->with(compact('capa', 'directiva', 'competitiva', 'financiera', 'tecnologica', 'humano', 'id_planeacion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $capacidad = capacidad::all();

        $planeacion = Proyectos::all();



        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response

         */
    }

    public function store(Request $request)
    {

        $plane = $request->get('idPlaneacion');

        //Contador de respuestas resueltas
        $count = 0;

        foreach ($request->get('preguntas') as $key => $value) {

            
        //Control Try-Catch para excepcionar (omitir) error de null y así continuar agregando.
            try {
                respuestaCapacidad::updateOrCreate(
                    [
                        "idCapacidad" => $value,
                        "idPlaneacion" => $plane
                    ],

                    [
                        "idPlaneacion" => $plane,
                        "idCapacidad" => $value,
                        "respuesta" => $request->get($value)
                    ]
                );

                //En caso de recibir un valor diferente de nulo (Respuesta resuelta) sumamos 1 a la variable count 

                if ($request->get($value) !== null) {
                       $count++;
                }

            } catch (\Throwable $th) {   
                
            }
        }

        //Fuera de foreach, evaluamos lo siguiente : 

        /*En caso del contador de respuestas no ser igual al contador de preguntas de total
          Recibimos el mensaje de error y retornamos nuevamente a la misma vista
          sin embargo, las respuestas resueltas serán guardadas  */

        if ($count !== count($request->get('preguntas'))) {

            $message = array(
                'message' => 'Recuerda llenar todo el formulario',
                'alert-type' => 'error'
            );

            return back()->with($message);

        /* Finalmente si todo está en orden (todas las respuestas han sido resueltas)
           retornamos a la siguiente vista, junto a un bello mensaje de todo está bien.  */

        }else if ($count === count($request->get('preguntas'))){

            $message = array(
                'message' => 'Perfíl de capacidad interna guardada con Éxito',
                'alert-type' => 'success'
            );

            return redirect('/perfilCompeInfo')->with($message);

        }


        /* Fin :) */

    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Model\capacidad  $capacidad
     * @return \Illuminate\Http\Response
     */
    public function show(capacidad $capacidad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\capacidad  $capacidad
     * @return \Illuminate\Http\Response
     */
    public function edit(capacidad $capacidad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\capacidad  $capacidad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, capacidad $capacidad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\capacidad  $capacidad
     * @return \Illuminate\Http\Response
     */
    public function destroy(capacidad $capacidad)
    {
        //
    }

    public function getAnswers($id)
    {

        $res = respuestaCapacidad::select('respuesta as idRespuesta', 'idCapacidad as capacidad', 'idPlaneacion as planeacion')
            ->join('capacidads', 'capacidads.id', 'respuesta_capacidad.idCapacidad')
            ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_capacidad.idPlaneacion')
            ->where('idPlaneacion', $id)
            ->get();




        return response()->json($res);
    }

   
}
