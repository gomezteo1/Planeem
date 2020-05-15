<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class estrategia extends Model
{
     protected $table = 'estrategia';

    protected $primarykey = 'id_estrategia' ;

    protected $fillable = ['Name_estrategia'];

    public $timestamps = false;
}


