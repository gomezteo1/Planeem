<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class FactorExternoO extends Model
{
    //

    protected $table = "factor_externo_o_s";
    
    protected $fillable = [
        
        'idRespuestaAnalisis',
        'idPlaneacion',
        'ponderacion',
        'totalPonderacion',
        'calificacion',
        'totalCalificacion',
        'puntuacionPonderada',
        'totalPuntuacion'
    ];

    public function planeacion(){
        return $this->belongsTo('App\Models\Proyectos','idPlaneacion');
    }

    public function analisis(){
        return $this->belongsTo('App\Models\respuestaAnalisis','idRespuestaAnalisis');
    }
}

