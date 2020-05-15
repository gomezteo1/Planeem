<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Model\Proyectos;
use App\Model\pensamiento_pensamiento;
use App\Model\Corporativos;
class WordTestController extends Controller
{
    //

    public function createWordDocx(Request $request)
    {
        $wordTest = new \PhpOffice\PhpWord\PhpWord();
        $newSection = $wordTest->addSection();
        $nombre_proyecto = $request->input('nombre_proyecto');
        $Propuesta = $request->input('Propuesta');
        $Mision= $request->input('Mision');
        $Vision = $request->input('Vision');
        $Mega = $request->input('Mega');
        $valores = $request->input('valores');


        if($Propuesta == 'Propuesta_valor'){
              $Propuesta_valor = pensamiento_pensamiento::select('Propuesta_valor')
              ->where('id_Planeacion',$nombre_proyecto)
              ->first();
            $newSection->addText('Propuesta valor:');
            $newSection->addText(" ");
            $newSection->addText($Propuesta_valor->Propuesta_valor);
        }else{
            $Propuesta_valor = " ";
             $newSection->addText($Propuesta_valor);
        }


        if($Mision == "Mision_Organizacional"){
             $Mision_Organizacional = pensamiento_pensamiento::select('Mision_Organizacional')->where('id_Planeacion',$nombre_proyecto)->first();
             $newSection->addText('Mision Organizacional:');
             $newSection->addText(" ");
             $newSection->addText($Mision_Organizacional->Mision_Organizacional);

        }else{
            $Mision_Organizacional = " ";
            $newSection->addText($Mision_Organizacional);
        }

        if($Vision  == "Vision_Organizacional"){
             $Vision_Organizacional =pensamiento_pensamiento::select('Vision_Organizacional')->where('id_Planeacion',$nombre_proyecto)->first();
            $newSection->addText('Vision Organizacional:');
            $newSection->addText(" ");
             $newSection->addText($Vision_Organizacional->Vision_Organizacional);
        }else{
            $Vision_Organizacional = " ";
            $newSection->addText($Vision_Organizacional);
        }


        if($Mega  == "Mega_Empresarial"){
             $Mega_Empresarial =pensamiento_pensamiento::select('Mega_Empresarial')->where('id_Planeacion',$nombre_proyecto)->first();
                         $newSection->addText('Mega Empresarial');
            $newSection->addText($Mega_Empresarial->Mega_Empresarial);

        }else{
            $Mega_Empresarial = " ";
            $newSection->addText($Mega_Empresarial);
        }

        if($valores  == "v"){

             $valores_corporativos=Corporativos::select('valores','descripcion')->where('id_Planeacion',$nombre_proyecto)->where('valores','<>','NULL')->get();
             $newSection->addText('valores corporativos');
                  $newSection->addText(" ");

            foreach($valores_corporativos as $valores_corporativos){
                $newSection->addText($valores_corporativos->valores,':');
                  $newSection->addText(" ");
                $newSection->addText($valores_corporativos->descripcion);
            }
        }else{
            $valores_corporativos= " ";
            $newSection->addText($valores_corporativos);
        }

        $objecWriter = \PhpOffice\PhpWord\IOFactory::createWriter($wordTest, 'Word2007');

        try {
            $objecWriter->save(storage_path('Planeem.docx'));
        } catch (Exception $e) {

        }
        return response()->download(storage_path('Planeem.docx'));
    }
}
