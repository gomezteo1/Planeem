<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactanosController extends Controller
{
    public function postcontacto(Request $reques){
        $Nombre = $reques->input('Nombre');
        $Correo = $reques->input('Correo');
        $Mensaje = $reques->input('Mensaje');
        
    }
}
