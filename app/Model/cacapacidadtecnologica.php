<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class cacapacidadtecnologica extends Model
{
    public $table = 'Tecnologica';

    protected $primarykey = 'id_Tecnologica' ;

    protected $fillable = ['Tecnologica','Debilidad','Fortaleza','id_Capacidad '];

}