<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class personaNatural extends Model
{
    //
    protected $table = "personanatural";

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'documento', 'tipoDocumento', 'nombres','apellidos','id_usuario'
    ];
    public $timestamps=false;
}
