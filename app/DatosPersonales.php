<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatosPersonales extends Model
{
    protected $table ='datos_personales';

    public function datosPersonales2()
    {
        return $this->hasMany('App\datospersonales2', 'aspirante_id');
    }

    public function antecedentes()
    {
        return $this->hasMany('App\GuardandoForm', 'aspirante_id');
    }



}
