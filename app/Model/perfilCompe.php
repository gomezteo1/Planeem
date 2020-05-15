<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class perfilCompe extends Model
{
    //
    protected $table = "perfil_compe";

    protected $fillable = [

        'idFactorClave',
        'idPlaneacion',
        'nombreEmpresa',
        'pesoRelativo',
        'totalPeso',
        'calificacion',
        'totalCalificacion',
        'pesoPonderado',
        'totalPonderado'
        
    ];
    public function factorClave(){
        return $this->belongsTo('App\Models\factorclave','idFactorClave');
    }

    public function planeacion(){
        return $this->belongsTo('App\Models\Proyectos','idPlaneacion');;
    }

}