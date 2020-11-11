<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GuardandoForm extends Model
{
    protected $table = 'antecedentes_de_salud_eps';

    public function datosPersonales()
    {
        return $this->belongsTo('App\DatosPersonales');
    }
}
