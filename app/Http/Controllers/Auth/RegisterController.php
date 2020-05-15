<?php

namespace App\Http\Controllers\Auth;

use App\Model\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use PhpParser\Node\Stmt\TryCatch;
use Illuminate\Support\Facades\DB;
use App\Model\personaNatural;
use App\Model\personaJuridica;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        if(isset($data['NIT'])){
            return Validator::make($data, [
                'username' => ['required','alpha_dash', 'max:255','unique:users'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:6', 'confirmed'],
                'NIT'=>'required|numeric|digits_between:6,12|unique:personajuridica',
                'razonSocial'=>['required','string'],
                'responsable'=>['required','alpha_spaces'],
                'sectorEconomico'=>['required'],
                'telefono'=>'nullable|digits_between:6,13',
            ]);
        }else{
            return Validator::make($data, [
                'username' => ['required','alpha_dash', 'max:255','unique:users'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:6', 'confirmed'],
                'documento'=>'required|numeric|digits_between:6,12|unique:personanatural',
                'tipoDocumento'=>['required'],
                'nombres'=>['required','alpha_spaces'],
                'apellidos'=>['required','alpha_spaces'],
                'telefono'=>'nullable|digits_between:6,13',
            ]);
        }


    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = new User();
        $natural = new personaNatural();
        $juridica = new personaJuridica();

        DB::transaction(function () use ($user, $data, $natural,$juridica) {


            $user->username = $data['username'];
            $user->email = $data['email'];
            $user->telefono = $data['telefono'];
            $user->password = Hash::make($data['password']);
            $user->selected_planne = 0;

            $user->save();
            if (isset($data['NIT'])) {
                $juridica->NIT = $data['NIT'];
                $juridica->razonSocial = $data['razonSocial'];
                $juridica->responsable = $data['responsable'];
                $juridica->sectorEconomico = $data['sectorEconomico'];
                $juridica->id_usuario = $user->id;
                $user->selected_planne = 0;

                $juridica->save();
            } else if(isset($data['documento'])){
                $natural->documento = $data['documento'];
                $natural->tipoDocumento = $data['tipoDocumento'];
                $natural->nombres = $data['nombres'];
                $natural->apellidos = $data['apellidos'];
                $natural->id_usuario = $user->id;
                $user->selected_planne = 0;

                $natural->save();
            }else {
                DB::rollback();

            }
        });
    
        return $user;
              
    }
}