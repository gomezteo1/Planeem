<?php

namespace App\Http\Controllers;

use App\Model\analisisPorter;
use App\Model\respuestaAnalisisPorter;
use App\Model\Proyectos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Model\ansorft;
use App\Model\TipoPreguntaansorft;
use App\Model\tipo_mercado;
use App\Model\tipo_Penetracion;
class AnalisisPorterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $id_planeacion = Proyectos::all();

        $poderProvee = analisisPorter::select('analisis_porters.*')
        ->where('idTipo',1)
        ->get();


        // dd($id_planeacion);

        $poderCliente= analisisPorter::select('analisis_porters.*')
        ->where('idTipo',2)
        ->get();

        $productoSustituto = analisisPorter::select('analisis_porters.*')
        ->where('idTipo',3)
        ->get();

        $amenazaCompe = analisisPorter::select('analisis_porters.*')
        ->where('idTipo',4)
        ->get();
        
        $rivaCompe = analisisPorter::select('analisis_porters.*')
        ->where('idTipo',5)
        ->get();


        return view('Modulo2.analisisPorter')->with( 'id_planeacion',$id_planeacion)->with('poderProvee',$poderProvee)->with('poderCliente',$poderCliente)->with('productoSustituto',$productoSustituto)->with('amenazaCompe',$amenazaCompe)->with('rivaCompe',$rivaCompe);
             
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $poderProvee = analisisPorter::select('analisis_porters.*')
        ->where('idTipo',1)
        ->get();

        $poderCliente= analisisPorter::select('analisis_porters.*')
        ->where('idTipo',2)
        ->get();

        $productoSustituto = analisisPorter::select('analisis_porters.*')
        ->where('idTipo',3)
        ->get();

        $amenazaCompe = analisisPorter::select('analisis_porters.*')
        ->where('idTipo',4)
        ->get();
        
        $rivaCompe = analisisPorter::select('analisis_porters.*')
        ->where('idTipo',5)
        ->get();

        
        $anaPorter = analisisPorter::all();

        $planeacion = Proyectos::all();
        return view('Modulo2.analisisPorter')->with(compact('planeacion', 'anaPorter','rivaCompe','amenazaCompe','productoSustituto','poderCliente','poderProvee'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $plane = $request->get('idPlaneacion');
        // dd($plane);

        foreach ($request->get('preguntas') as $key => $value) {

            if ($request->get($value) === null) {

                $message = array(
                    'message' => 'Recuerda responder todo el cuestionario',
                    'alert-type' => 'error'
                );

                return back()->with($message);

             } else {

                respuestaAnalisisPorter::updateOrCreate(
                    [
                        "idAnaPorter" => $value,
                        "idPlaneacion" => $plane
                    ],

                    [
                        "idPlaneacion" => $plane,
                        "idAnaPorter" => $value,
                        "respuesta" => $request->get($value)
                    ]
                );

                $message = array(
                    'message' => 'Análisis porter guardado con Éxito',
                    'alert-type' => 'success'
                );
            }
        }

    

        $DesaMerca = TipoPreguntaansorft::select('tipo_preguntaansorfts.*')
        ->where('idTipo',1)
        ->get();


        $tipo_Penetracion=tipo_Penetracion::all();


        
        $DesaMerca2 = TipoPreguntaansorft::select('tipo_preguntaansorfts.*')
        ->where('idTipo',1)
        ->get();


        $tipo_Penetracion2=tipo_Penetracion::all();


        
        $DesaMerca3 = TipoPreguntaansorft::select('tipo_preguntaansorfts.*')
        ->where('idTipo',1)
        ->get();


        $tipo_Penetracion3=tipo_Penetracion::all();



        
        $DesaMerca4 = TipoPreguntaansorft::select('tipo_preguntaansorfts.*')
        ->where('idTipo',1)
        ->get();


        $tipo_Penetracion4=tipo_Penetracion::all();

        $DesaMerca5 = TipoPreguntaansorft::select('tipo_preguntaansorfts.*')
        ->where('idTipo',1)
        ->get();
        $tipo_Penetracion5 =tipo_Penetracion::all(); 

        
        $DesaMerca6 = TipoPreguntaansorft::select('tipo_preguntaansorfts.*')
        ->where('idTipo',1)
        ->get();


        $tipo_Penetracion6 =tipo_Penetracion::all(); 


        $id_planeacion =  $plane;


         return view('Modulo2.ansorftMercado')->with(compact('DesaMerca','tipo_Penetracion','DesaMerca2','tipo_Penetracion2','DesaMerca3',
         'tipo_Penetracion3','DesaMerca4','tipo_Penetracion4','DesaMerca5','tipo_Penetracion5','DesaMerca6','tipo_Penetracion6','id_planeacion'))->with($message);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\analisisPorter  $analisisPorter
     * @return \Illuminate\Http\Response
     */
    public function show(analisisPorter $analisisPorter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\analisisPorter  $analisisPorter
     * @return \Illuminate\Http\Response
     */
    public function edit(analisisPorter $analisisPorter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\analisisPorter  $analisisPorter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, analisisPorter $analisisPorter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\analisisPorter  $analisisPorter
     * @return \Illuminate\Http\Response
     */
    public function destroy(analisisPorter $analisisPorter)
    {
        //
    }

    public function getAnswers($id)
    {

        $res = respuestaAnalisisPorter::select('respuesta as idRespuesta', 'idAnaPorter	 as anaPorter', 'idPlaneacion as planeacion')
            ->join('analisis_porters', 'analisis_porters.id', 'respuesta_analisis_porters.idAnaPorter')
            ->join('planeacion', 'planeacion.id_Planeacion', 'respuesta_analisis_porters.idPlaneacion')
            ->where('idPlaneacion', $id)
            ->get();




        return response()->json($res);
    }
}
