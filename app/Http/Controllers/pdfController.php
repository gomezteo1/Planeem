<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Proyectos;
use App\Model\pensamiento_pensamiento;
use App\Model\Corporativos;
use App,PDF;

class pdfController extends Controller
{
    
    public function pdf(Request $request){

		$nombre_proyecto = $request->input('nombre_proyecto2');
        $Propuesta = $request->input('Propuesta');
        $Mision= $request->input('Mision_Organizacional');
        $Vision = $request->input('Vision_Organizacional');
        $Mega = $request->input('Mega_Empresarial');
		
		$valores = $request->input('valores');
		
        if($Propuesta == 'Propuesta_valor'){
			$Propuesta_valor = pensamiento_pensamiento::select('Propuesta_valor')
			->where('id_Planeacion',$nombre_proyecto)
			->first();
			$pdf = PDF::loadHTML('<h1>Propuesta valor:</h1>');
			$pdf = PDF::loadHTML('<br>');
			$pdf = PDF::loadHTML($Propuesta_valor->Propuesta_valor);
		  }


	  if($Mision == "Mision_Organizacional"){
		   $Mision_Organizacional = pensamiento_pensamiento::select('Mision_Organizacional')->where('id_Planeacion',$nombre_proyecto)->first();
		   $pdf = PDF::loadHTML('<h1>Mision Organizacional:</h1>');
		   $pdf = PDF::loadHTML('<br>');
		   $pdf = PDF::loadHTML('<br>');
		   $pdf = PDF::loadHTML($Mision_Organizacional->Mision_Organizacional);
	  }

	  if($Vision  == "Vision_Organizacional"){
		   $Vision_Organizacional =pensamiento_pensamiento::select('Vision_Organizacional')->where('id_Planeacion',$nombre_proyecto)->first();
		   $pdf = PDF::loadHTML('<h1>Vision Organizacional:</h1>');
		   $pdf = PDF::loadHTML('<br>');
		   $pdf = PDF::loadHTML('<br>');
		   $pdf = PDF::loadHTML($Vision_Organizacional->Vision_Organizacional);
	  }


	  if($Mega  == "Mega_Empresarial"){
				  $Mega_Empresarial =pensamiento_pensamiento::select('Mega_Empresarial')->where('id_Planeacion',$nombre_proyecto)->first();
				  $pdf = PDF::loadHTML('<h1>Mega Empresarial:</h1>');
				  $pdf = PDF::loadHTML('<br>');
				  $pdf = PDF::loadHTML('<br>');
				  $pdf = PDF::loadHTML($Mega_Empresarial->Mega_Empresarial);
	  }

	  if($valores  == "v"){
		   $valores_corporativos=Corporativos::select('valores','descripcion')->where('id_Planeacion',$nombre_proyecto)->where('valores','<>','NULL')->get();
		   $pdf = PDF::loadHTML('<h1>valores corporativos:</h1>');
		  foreach($valores_corporativos as $valores_corporativos){
				  $pdf = PDF::loadHTML('<h1>valores:</h1>');
				  $pdf = PDF::loadHTML('<br>');
				  $pdf = PDF::loadHTML($valores_corporativos->valores);
				  $pdf = PDF::loadHTML('<h1>descripcion:</h1>');
				  $pdf = PDF::loadHTML('<br>');
				  $pdf = PDF::loadHTML($valores_corporativos->descripcion);
		  }

	  }
	  return $pdf->download('planeem.pdf');
    }
}
