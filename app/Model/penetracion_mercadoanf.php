<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class penetracion_mercadoanf extends Model
{
    protected $table = 'penetracion_mercadoanf';

    protected $primarykey = 'id_penetracion_mercadoanf' ;

    protected $fillable = ['name_penetracion_mercadoanf'];

     public $timestamps = false;
}
