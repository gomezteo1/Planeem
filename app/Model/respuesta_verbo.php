<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class respuesta_verbo extends Model
{
    protected $primaryKey = 'id_Pensamiento';
     
    protected $table = 'respustaverbos';

    protected $fillable = [
        'Objetivos',
        'id_Planeacion',
        'posiciones',
    ];


    public $timestamps=false;
}
