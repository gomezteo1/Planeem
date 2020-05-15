<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class respuestaAnalisisPorter extends Model
{
     protected $table= "respuesta_analisis_porters";
    protected $fillable  =[
         
        'idAnaPorter',
        'idPlaneacion',
        'respuesta'
    
    ];
    public function anaPorter(){
        return $this->belongsTo('App\Models\analisisPorter','idAnaPorter');
    }
    public function planeacion(){
        return $this->belongsTo('App\Models\Proyectos','idPlaneacion');
    }

}
