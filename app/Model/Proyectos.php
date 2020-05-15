<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Proyectos extends Model
{
    protected $table = "Planeacion";

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $primaryKey = 'id_Planeacion';
    
    protected $fillable = [
        'nombre_proyecto', 'fechainicio','estado', 'fechaculminacion','id_usuario'
    ];
    public $timestamps=false;
}
