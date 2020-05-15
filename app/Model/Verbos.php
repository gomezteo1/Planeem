<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Verbos extends Model
{
    protected $primarykey="id_verbos";

    protected $table="verbos";

    public $fillable= [
             'nombre'
    ];

    public $timestamps=false;
}
