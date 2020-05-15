<?php

namespace App\Http\Controllers;

use App\Model\FactorExternoA;
use App\Model\Proyectos;
use App\Model\respuestaAnalisis;
use Illuminate\Http\Request;

class FactorExternoAController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $id_planeacion = Proyectos::all();

        $id = auth()->user()->selected_planne;

        $type = ['fAlta', 'fMedia', 'fBaja'];

        $Oportunidad = respuestaAnalisis::select('analisis.nombre', 'analisis.id as idAnalisis')
            ->join('capacidads', 'capacidads.id', 'respuesta_capacidad.idCapacidad')
            ->whereIn('respuesta', $type)
            ->where('idPlaneacion', $id)
            ->get();

        dd($Oportunidad);

        $type2 = ['dAlta', 'dMedia', 'dBaja'];

        $Amenaza = respuestaAnalisis::select('capacidads.nombre', 'capacidads.id as idAnalisis')
            ->join('capacidads', 'capacidads.id', 'respuesta_capacidad.idCapacidad')
            ->whereIn('respuesta', $type2)
            ->where('idPlaneacion', $id)
            ->get();

        // dd($debilidad);



        return view('Modulo2.factoresExternoA')->with(compact('fortaleza', 'debilidad', 'id', 'id_planeacion'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\FactorExternoA  $factorExternoA
     * @return \Illuminate\Http\Response
     */
    // public function show(FactorExternoA $factorExternoA)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\FactorExternoA  $factorExternoA
     * @return \Illuminate\Http\Response
     */
    // public function edit(FactorExternoA $factorExternoA)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\FactorExternoA  $factorExternoA
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, FactorExternoA $factorExternoA)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\FactorExternoA  $factorExternoA
     * @return \Illuminate\Http\Response
     */
    // public function destroy(FactorExternoA $factorExternoA)
    // {
    //     //
    // }
}
