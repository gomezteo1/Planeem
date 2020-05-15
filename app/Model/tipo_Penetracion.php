<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class tipo_Penetracion extends Model
{
    protected $table = 'tipo_Penetracion';

    protected $primarykey = 'id_tipo_Penetracion' ;

    protected $fillable = ['nombre'];

    public $timestamps = false;
}
