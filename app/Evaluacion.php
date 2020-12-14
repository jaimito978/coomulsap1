<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
    protected $table ='evaluacion_gerencia';

    public function datosPersonales()
    {
        return $this->belongsTo('App\DatosPersonales');
    }
}
