<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class formulacionestrategias extends Model
{
    protected $primaryKey = 'id_formulacionEstrategias';
     
    protected $table = 'formulacionestrategias';

    protected $fillable = [
        'id_Planeacion',
        'id_respustaverbos',
        'id_estrategia',
        'pocision'
    ];
    
    
}
