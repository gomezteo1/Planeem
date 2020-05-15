<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loguinController extends Controller
{
   public function login(){
            $credencial =   $this->validate(request(),[
            $this->userName=>'requird',
            'passwords'=>'requird'
       ]);

       if(Auth::attempt($credencial)){
           return redirect()->route('home');
       }
       return back()
       ->withErrors([$this->userName()=> trans('auth.failed')])
       ->withImput(request([$this->userName()]));

    }

    public function userName(){
        return 'email';
    }

}
