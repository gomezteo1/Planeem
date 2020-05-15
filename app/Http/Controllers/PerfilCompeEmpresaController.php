<?php

namespace App\Http\Controllers;

use App\Model\factorclave;
use App\Model\perfilCompe;
use App\Model\perfilCompeEmpresa;
use App\Model\Proyectos;
use Illuminate\Http\Request;
use DB;


class PerfilCompeEmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index(Request $request)
    {
        $cantidad = $request->input('cantidad');
        $idPlaneacion = $request->input('id_planecion');
        $factorClave=factorclave::all();
        $perfilCompe=perfilCompe::all();
        $perfilCompeEmpresa= perfilCompeEmpresa::select('*')
        ->where('idPlaneacion',$idPlaneacion)->get();
        $planeacion=Proyectos::all();
        
  
        // return Response()->jason();
        return view('Modulo2.perfilCompe')->with('cantidad',$cantidad)->with('idPlaneacion',$idPlaneacion)->with('factorClave',$factorClave)->with('perfilCompe',$perfilCompe)->with('perfilCompeEmpresa',$perfilCompeEmpresa)->with('planeacion',$planeacion);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $factorClave=factorclave::all();
        $perfilCompe=perfilCompe::all();

        $perfilCompeEmpresa=perfilCompeEmpresa::all();
        
        $planeacion=Proyectos::all();

        return view('Modulo2.perfilCompe')->with(compact('factorClave','planeacion','perfilCompeEmpresa','perfilCompe'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeEmpe(Request $request)

    {  
        $factorClave = $request->get('idFactorClave');
        $planeacion = $request->get('idPlaneacion');
        $nombre = $request->get('nombreEmpresa');
        $pesoRelativo = $request->get('pesoRelativo');
        $calificacion = $request->get('calificacion');
        $peso = $request->get('pesoPonderado');
        $cantidad = $request->get('cantidad');

        foreach ($nombre as $nombre) {

            for ($i = 0; $i < count($factorClave); $i++) {
               
                perfilCompeEmpresa::updateorCreate(
                    [
                        'idFactorClave' => $factorClave[$i],
                        'idPlaneacion' => $planeacion,
                        'nombreEmpresa' => $nombre,
                    ],
                    [
                        'idFactorClave' => $factorClave[$i],
                        'idPlaneacion' => $planeacion,
                        'nombreEmpresa' => $nombre,
                        'pesoRelativo' => $pesoRelativo[$i],
                        'calificacion' => $calificacion[$i],
                        'pesoPonderado' => $peso[$i],
                        'cantidad'=>$cantidad
                    ]
                );
            }
        }


          
        $message = array(
            'message' => 'Empresas Guardadas con Éxito',
            'alert-type' => 'success'
        );
        

        return view('Modulo2.factoresInternosI')->with($message)->with('planeacion',$planeacion);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Model\perfilCompeEmpresa  $perfilCompeEmpresa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
            $perfilCompeEmpresa = perfilCompeEmpresa::select('idPlaneacion as id','idFactorClave as factorClave','nombreEmpresa as nombreEmpresa','pesoRelativo as pesoRelativo','calificacion as calificacion','pesoPonderado as pesoPonderado')
            ->where('idPlaneacion',$id)
            ->get();


    

           return response()->json($perfilCompeEmpresa);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\perfilCompeEmpresa  $perfilCompeEmpresa
     * @return \Illuminate\Http\Response
     */
    public function edit(perfilCompeEmpresa $perfilCompeEmpresa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\perfilCompeEmpresa  $perfilCompeEmpresa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, perfilCompeEmpresa $perfilCompeEmpresa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\perfilCompeEmpresa  $perfilCompeEmpresa
     * @return \Illuminate\Http\Response
     */
    public function destroy(perfilCompeEmpresa $perfilCompeEmpresa)
    {
        //
    }
}
