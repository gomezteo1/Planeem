<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class respuestaverbos extends Model
{
    
    protected $primaryKey = 'id_respuesta_verbos';
     
    protected $table = 'respustaVerbos';

    protected $fillable = [
        'id_Planeacion',
        'Objetivos'
    ];


    public $timestamps=false;
}

