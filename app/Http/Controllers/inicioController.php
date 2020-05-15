<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class inicioController extends Controller
{
    public function index()
    {
        if(Auth::check()){
            return back();
        }
        else{
            return view('index');
        }
    }
}
