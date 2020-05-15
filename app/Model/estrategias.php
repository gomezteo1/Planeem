<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class estrategias extends Model
{
    protected $table = 'estrategias';

    protected $primarykey = 'id_estrategias' ;

    protected $fillable = ['Nameestrategias'];

}
