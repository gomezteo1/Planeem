<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class graficaControler extends Controller
{
   public function dotos($id){

 
     $devilidad = ['dAlta','dBaja','dMedia'];


    $perfil_compeDevilidad = DB::table('factor_internos')
    ->join('respuesta_capacidad','factor_internos.idRespuestaCapacidad','respuesta_capacidad.id')
    ->select('factor_internos.totalPuntuacion')
    ->where('factor_internos.idPlaneacion',$id)
    ->where('respuesta',$devilidad)
    ->get();


    $sum1 = 0;


    foreach ($perfil_compeDevilidad as $perfil_compeDevilidad) {
       $k = key($perfil_compeDevilidad);
       $sum1 += $perfil_compeDevilidad->{$k};
    }

  


    $totalPonderado = DB::table('perfil_compe')
    ->select('totalPonderado')
    ->where('idPlaneacion',$id)
    ->get();

    $sum2 =0 ;

    foreach ($totalPonderado as $totalPonderado) {
      $k = key($totalPonderado);
      $sum2 += $totalPonderado->{$k};

      $sum2  = $sum2 /2;
   }


      $totalPonderado = DB::table('perfil_compe_empresas')
      ->select('pesoPonderado')
      ->where('idPlaneacion',$id)
      ->get();

      $sum3 = 0;

      foreach ($totalPonderado as $totalPonderado) {
         $k = key($totalPonderado);
         $sum3 += $totalPonderado->{$k};
      }



      $factor_internos = DB::table('factor_internos')
      ->select('totalPonderacion')
      ->where('idPlaneacion',$id)
      ->get();



      $sum4 = 0;

      foreach ($factor_internos as $factor_internos) {
         $k = key($factor_internos);
         $sum4 += $factor_internos->{$k};
      }

      $sum4 = $sum4/2;


      $ansorfts = DB::table('ansorfts')
      ->select('pesoPonderado')
      ->where('idPlaneacion',$id)
      ->get();



      $sum5 = 0;

      foreach ($ansorfts as $ansorfts) {
         $k = key($ansorfts);
         $sum5 += $ansorfts->{$k};
      }

      $sum5 = $sum5/7;




      
      $respuesta_penetracion = DB::table('respuesta_penetracion')
      ->select('Peso_Ponderado')
      ->where('id_Planeacion',$id)
      ->get();



      $sum6 = 0;

      foreach ($respuesta_penetracion as $respuesta_penetracion) {
         $k = key($respuesta_penetracion);
         $sum6 += $respuesta_penetracion->{$k};
      }

      $sum6 = $sum6/7;


      
      $evaluacion_factores = DB::table('evaluacion_factores')
      ->select('Peso_Ponderado')
      ->where('id_Planeacion',$id)
      ->get();



      $sum7 = 0;

      foreach ($evaluacion_factores as $evaluacion_factores) {
         $k = key($evaluacion_factores);
         $sum7 += $evaluacion_factores->{$k};
      }

      $sum7 = $sum7/2;

      $datos = [$sum1,$sum2,$sum3,$sum4,$sum5,$sum6,$sum7];

    return response()->json($datos);


   }











}
