<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class datospersonales2 extends Model
{
    protected $table ='datos_personales2';

    public function datosPersonales()
    {
        return $this->belongsTo('App\DatosPersonales');
    }

}
