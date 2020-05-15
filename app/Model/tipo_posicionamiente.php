<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class tipo_posicionamiente extends Model
{
    protected $primaryKey = 'id_tipo_posicionamiento';
     
    protected $table = 'tipo_posicionamiento';

    protected $fillable = [
        'tipo_posicionamiento'
    ];
}
