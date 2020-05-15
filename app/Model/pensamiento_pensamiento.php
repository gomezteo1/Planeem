<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class pensamiento_pensamiento extends Model
{
    protected $primaryKey = 'id_Pensamiento';
     
    protected $table = 'pensamiento_pensamiento';

    protected $fillable = [
        'Mision_Organizacional',
        'Vision_Organizacional',
        'Mega_Empresarial',
        'Propuesta_valor',
        'id_Planeacion'
    ];


    public $timestamps=false;
}
