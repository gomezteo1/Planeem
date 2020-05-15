<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Penetracion_tipo extends Model
{
    protected $primaryKey = 'id_tipo_Penetración';
     
    protected $table = 'tipo_Penetración';

    protected $fillable = [
        'name_tipo_Penetración'
    ];


    // public $timestamps=false;
}
