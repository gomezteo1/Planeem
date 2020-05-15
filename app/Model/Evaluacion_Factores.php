<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Evaluacion_Factores extends Model
{
    protected $primaryKey = 'id_Evaluacion_Factores';
     
    protected $table = 'Evaluacion_Factores';

    protected $fillable = [
        'tipo',
        'Peso_Relativo',
        'Calificación',
        'Peso_Ponderado',
        'id_respuesta_analisis_porters',
        'id_Planeacion'
    ];


}

