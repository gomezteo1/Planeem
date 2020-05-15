<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator,DB, Hash, Mail,Auth;
use App\Model\pensamiento_pensamiento;
use App\Model\Proyectos;
use App\Model\Corporativos;

use Alert;



class planeacionControlle extends Controller
{



    public function store(Request $request)
    {
        $proyecto = Proyectos::all(); 
        $id=$proyecto->id_Planeacion=$request->input('id_Planeacion');
        DB::table('planeacion')->where('id_Planeacion', $id)->update(['proceso' => 'proceso1']);

        $input = $request->all();
        
        $Mision_Organizacional = $request->input('Mision_Organizacional');
        $Vision_Organizacional = $request->input('Vision_Organizacional');
        $Mega_Empresarial = $request->input('Mega_Empresarial');
        $Propuesta_valor = $request->input('Propuesta_valor');
        $id_Planeacion = $request->input('id_Planeacion');
   

   

            try{

                pensamiento_pensamiento::updateorCreate(
                    [
                        'id_Planeacion'=>$id_Planeacion

                    ],
                    [
                        'Mision_Organizacional'=> $Mision_Organizacional,
                        'Vision_Organizacional' => $Vision_Organizacional,
                        'Mega_Empresarial'=>  $Mega_Empresarial,
                         'Propuesta_valor'=>$Propuesta_valor,
                         'id_Planeacion'=>$id_Planeacion
                    ]
                );

                

                }catch(\exception $ex){
                  return $ex;
         }

        

        $id=$request->input('id_Planeacion');
  
        $proyect = Proyectos::find($id);
        
         $id_plane = Proyectos::all(); 
        
         $proyecto->nombre_proyecto=$request->input('nombre_proyecto');
        
         return view('Modulo1.Corporativos.vista24')->with('id_plane',$id_plane)->with('proyecto',$proyecto)->with('proyect',$proyect);



    }






        public function planeacion(Request $request){
         

            $id_plane = Proyectos::all(); 

            $proyecto = Proyectos::all(); 

            $proyecto->nombre_proyecto=$request->input('nombre_proyecto');

        
            return view('Modulo1.MEGA.vista23')->with('id_plane',$id_plane)->with('proyecto',$proyecto);

       
    }


            public function Proyectos(Request $request){
                

                $id_plane = Proyectos::all(); 
                $proyecto = Proyectos::all(); 
                $proyecto->nombre_proyecto=$request->input('nombre_proyecto');
                return view('Modulo1.planeacion.vista2')->with('id_plane',$id_plane)->with('proyecto',$proyecto);
        }


        public function Proyectos2(Request $request){
                
        $id=$request->input('id_Planeacion');

        $proyect = Proyectos::find($id);
        

         return view('Modulo1.MEGA.vista28')->with('proyect',$proyect);
        }

        
        public function select($id){


            $proyect = Proyectos::find($id);

              return view('Modulo1.Corporativos.vista28')->with('proyect',$proyect);

        }





        

    public function planeacion_id(Request $request){

        $estado = Proyectos::all();
        $nombre =  $estado->nombre_proyecto=$request->input('nombre_proyecto');

        $id = DB::table('planeacion')
        ->select('id_Planeacion')
        ->where('nombre_proyecto', $nombre)->first();

        foreach($id as $id){
            $proyect = Proyectos::find($id);
        }

        $pensamiento = pensamiento_pensamiento::all();


        return view('Modulo1.Corporativos.vista28')->with('proyect',$proyect)->with('pensamiento',$pensamiento );

    }




   public function update( Request $request){

    

        $proyecto = Proyectos::All();
        $proyecto->id_Planeacion=$request->input('id_Planeacion');
        $planecion = Proyectos::all();
        $pensamiento_pensamiento = pensamiento_pensamiento::all();
         return view('Modulo1.Mod.modificar')->with('planecion',$planecion)->with('proyecto',$proyecto)->with('pensamiento_pensamiento',$pensamiento_pensamiento);
   }


   //palanecion udate


  public function updatePlanecion(Request $request ){
    $proyecto = Proyectos::All();
    $proyecto->id_Planeacion=$request->input('id_Planeacion');
    $planecion = Proyectos::all();
    $pensamiento_pensamiento = pensamiento_pensamiento::all();
    $id=$proyecto->id_Planeacion=$request->input('id_Planeacion');
    $nombre=$proyecto->nombre_proyecto=$request->input('nombre_proyecto');

    DB::table('planeacion')->where('id_Planeacion', $id)->update(['nombre_proyecto' => $nombre]);
    
    $id = DB::table('planeacion')
        ->select('id_Planeacion')
        ->where('nombre_proyecto', $nombre)->first();

        foreach($id as $id){
            $proyect = Proyectos::find($id);
        }

        $pensamiento = pensamiento_pensamiento::all();


        return view('planeacion.index')->with('proyect',$proyect)->with('pensamiento',$pensamiento );

   

   }

   public function updatePropuesta(Request $request){

    $pensamiento = pensamiento_pensamiento::select('*')->get();
    $id=$request->input('id_Planeacion');
    $proyecto = Proyectos::find($id);
    return view('Modulo1.Mod.modificaPropuesta')->with('proyecto',$proyecto)->with('pensamiento',$pensamiento);

   }



    public function updateValor(Request $request){

        $proyecto = Proyectos::All();
        $pensamiento = pensamiento_pensamiento::all();
        $id= $proyecto->id_Planeacion=$request->input('id_Planeacion');
        $pensamiento1=$pensamiento->Propuesta_valor=$request->input('Propuesta_valor');
        $planecion = Proyectos::all();
        $pensamiento_pensamiento = pensamiento_pensamiento::all();

        DB::table('pensamiento_pensamiento')->where('id_Planeacion', $id)->update(['Propuesta_valor' => $pensamiento1]);
        $planecion = Proyectos::all();
        $pensamiento_pensamiento = pensamiento_pensamiento::all();
        alert()->success('datos modificados correctamente.','Éxito')->autoclose(3000);

         return view('Modulo1.Mod.modificar')->with('planecion',$planecion)->with('proyecto',$proyecto)->with('pensamiento_pensamiento',$pensamiento_pensamiento);

    }
    


    public function retuMision_Organizacional(Request $request){
        /////////id del proyecto
        $pensamiento = pensamiento_pensamiento::select('*')->get();
        $id=$request->input('id_Planeacion');
        $proyecto = Proyectos::find($id);
        return view('Modulo1.Mod.updatemision_Organizacional')->with('proyecto',$proyecto)->with('pensamiento',$pensamiento);
    
       }

  

       
    public function updateMision_Organizacional(Request $request){

        $proyecto = Proyectos::All();
        $pensamiento = pensamiento_pensamiento::all();
        $id= $proyecto->id_Planeacion=$request->input('id_Planeacion');
        $pensamiento1=$pensamiento->Mision_Organizacional=$request->input('Mision_Organizacional');

        DB::table('pensamiento_pensamiento')->where('id_Planeacion', $id)->update(['Mision_Organizacional' => $pensamiento1]);

        $planecion = Proyectos::all();
        $pensamiento_pensamiento = pensamiento_pensamiento::all();


        alert()->success('datos modificados correctamente.','Éxito')->autoclose(3000);

         return view('Modulo1.Mod.modificar')->with('planecion',$planecion)->with('proyecto',$proyecto)->with('pensamiento_pensamiento',$pensamiento_pensamiento);
    }



    public function up_Vision_Organizacional(Request $request){

        $pensamiento = pensamiento_pensamiento::select('*')->get();
        $id=$request->input('id_Planeacion');
        $proyecto = Proyectos::find($id);
        return view('Modulo1.Mod.updateVision_Organizacional')->with('proyecto',$proyecto)->with('pensamiento',$pensamiento);

    }


         
    public function updateVision_Organizacional(Request $request){

        $proyecto = Proyectos::All();
        $pensamiento = pensamiento_pensamiento::all();
        $id = $proyecto->id_Planeacion=$request->input('id_Planeacion');
        $pensamiento1=$pensamiento->Vision_Organizacional=$request->input('Vision_Organizacional');

        DB::table('pensamiento_pensamiento')->where('id_Planeacion', $id)->update(['Vision_Organizacional' => $pensamiento1]);

        $planecion = Proyectos::all();
        $pensamiento_pensamiento = pensamiento_pensamiento::all();
        alert()->success('datos modificados correctamente.','Éxito')->autoclose(3000);

         return view('Modulo1.Mod.modificar')->with('planecion',$planecion)->with('proyecto',$proyecto)->with('pensamiento_pensamiento',$pensamiento_pensamiento);
    }



    
    public function up_Mega_Empresarial(Request $request){

        $pensamiento = pensamiento_pensamiento::select('*')->get();
        $id=$request->input('id_Planeacion');
        $proyecto = Proyectos::find($id);
        return view('Modulo1.Mod.updateMega_Empresarial')->with('proyecto',$proyecto)->with('pensamiento',$pensamiento);

    }



    public function updateMega_Empresarial(Request $request){

        $proyecto = Proyectos::All();
        $pensamiento = pensamiento_pensamiento::all();
        $id = $proyecto->id_Planeacion=$request->input('id_Planeacion');
        $pensamiento1=$pensamiento->Mega_Empresarial=$request->input('Mega_Empresarial');

        DB::table('pensamiento_pensamiento')->where('id_Planeacion', $id)->update(['Mega_Empresarial' => $pensamiento1]);

        $planecion = Proyectos::all();
        $pensamiento_pensamiento = pensamiento_pensamiento::all();
        alert()->success('datos modificados correctamente.','Éxito')->autoclose(3000);

         return view('Modulo1.Mod.modificar')->with('planecion',$planecion)->with('proyecto',$proyecto)->with('pensamiento_pensamiento',$pensamiento_pensamiento);
    }





    public function indexp(Request $request){
    
        $nombre =$request->input('nombre_proyecto');
        
        $id = DB::table('planeacion')
        ->select('id_Planeacion')
        ->where('nombre_proyecto', $nombre)->first();
        
        foreach($id as $id){
            $proyect = Proyectos::find($id);
        }
        
         return view('planeacion.index',compact('proyect'));
    }


}
