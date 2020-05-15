<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use App\Model\pensamiento_pensamiento;
use Illuminate\Support\Facades\Input;
use App\Model\Proyectos;
use DB;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        Carbon::setLocale('es');
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $proyecto = Proyectos::all();
        $carbon= Carbon::now();
        return view('home',compact('carbon','proyecto'));
        // dd($proyecto->all());
    }

    protected function validator(array $data)
    {

        return Validator::make($data, [
            'nombre_proyecto'=>['required','string','unique:planeacion'],
            'fechainicio'=> ['required','after:tomorrow']
        ]);
    }

    public function store(Request $request)
    {
        $this->validator($request->all())->validate();
        $proyecto = new Proyectos();
        // $fecha = $request->input('fechainicio');
        // $fechainicio = Carbon::createFromFormat('d/m/Y',$fecha);
        $proyecto->nombre_proyecto=$request->input('nombre_proyecto');
        $proyecto->fechainicio=$request->input('fechainicio');
        $proyecto->estado=$request->input('estado');
        // $proyecto->fechaculminacion=$request->input('fechaculminacion');
        $proyecto->id_usuario=$request->input('id_usuario');
        $proyecto->save();
        $proyectos = Proyectos::all();
        $proyect = $proyectos->last();
    
    
        // DB::table('capacidadinterna')->insert(['id_Planeacion' => $proyecto->id_Planeacion]);


        return view('planeacion.index',compact('proyect'));
        // Sirve para retornar en la vista como consola lo que se esta enviando al controlador
        // dd($request->all());

    }

    public function show($id)
    {       
         $estado = Proyectos::all();
        $proyect = Proyectos::find($id);
        $user = auth()->user();
        $user->selected_planne = $id;
        $user->save();

        return view('planeacion.index', compact('proyect'));
    }


    public function delecte($id){
        
        $affected = DB::table('planeacion')
              ->where('id_Planeacion', $id)
              ->update(['estado' => '1']);
              $proyecto = Proyectos::all();
              $carbon= Carbon::now();
              return redirect()->route('home');
    }

    
    public function papelera (){

         $planecion=Proyectos::all();
         return view('papelera')->with('planecion',$planecion);
         
    }



   public function Restaurar ($id){
 
    $plnecion=Proyectos::all();


    $affected = DB::table('planeacion')
    ->where('id_Planeacion', $id)
    ->update(['estado' => 'Pendiente']);
    $proyecto = Proyectos::all();
    $carbon= Carbon::now();

    return redirect()->route('home');

    
  }

}
