<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class respuestaCapacidad extends Model
{ 
    protected $table= "respuesta_capacidad";
    protected $fillable  =[
         
        'idCapacidad',
        'idPlaneacion',
        'respuesta'
    
    ];
    public function capacidad(){
        return $this->belongsTo('App\Models\capacidad','idCapacidad');
    }
    public function planeacion(){
        return $this->belongsTo('App\Models\Proyectos','idPlaneacion');
    }

}
