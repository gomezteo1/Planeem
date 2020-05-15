<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class respuestaAnalisis extends Model
{
    //
    protected $table="respuesta_analisis";
    protected $fillable  =[
         
        'idAnalisis',
        'idPlaneacion',
        'respuesta'
    
    ];
    public function analisis(){
        return $this->belongsTo('App\Models\analisis','idAnalisis');
    }
    public function planeacion(){
        return $this->belongsTo('App\Models\Proyectos','idPlaneacion');
    }


}
