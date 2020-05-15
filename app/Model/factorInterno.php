<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class factorInterno extends Model
{
    protected $table= "factor_internos";

    protected $fillable  =[
        'idRespuestaCapacidad',
        'idPlaneacion',
        'ponderacion',
        'totalPonderacion',
        'calificacion',
        'totalCalificacion',
        'puntuacionPonderada',
        'totalPuntuacion',
    
       
    ];
    public function respuestaCapacidad(){
        return $this->belongsTo('App\Models\respuestaCapacidad','idRespuestaCapacidad');
    }
    public function planeacion(){
        return $this->belongsTo('App\Models\Proyectos','idPlaneacion');
    }
 

}
