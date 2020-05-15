<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class perfilCompeEmpresa extends Model
{
    //
    protected $table = "perfil_compe_empresas";

    protected $fillable = [
        'idFactorClave',
        'idPlaneacion',
        'nombreEmpresa',
        'pesoRelativo',
        'totalPeso',
        'totalCalificacion',
        'totalPonderado',
        'calificacion',
        'cantidad',
        'pesoPonderado',



    ];
    public function factorClave(){
        return $this->belongsTo('App\Models\factorclave','idFactorClave');
    }

    public function planeacion(){
        return $this->belongsTo('App\Models\Proyectos','idPlaneacion');;
    }


}


