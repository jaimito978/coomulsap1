<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatosPersonalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_personales', function (Blueprint $table) {
            $table->id();
             //datos personales
             $table->string('fecha')->nullable();
             $table->string('hora_citado')->nullable();
             $table->string('nombre_aspirante')->nullable();
             $table->string('cargo')->nullable();
             $table->string('edad')->nullable();
             $table->string('cedula')->nullable();
             $table->string('titulo_otorgado')->nullable();
             $table->string('direccion')->nullable();
             $table->string('telefono')->nullable();
             $table->string('estado_civil')->nullable();
             $table->string('sexo')->nullable();
             $table->string('municipio')->nullable();
             $table->string('vivienda')->nullable();
             $table->string('valor_arriendo')->nullable();
             $table->string('valor_egresos')->nullable();
             $table->string('ref_personal')->nullable();
             $table->string('nombre_de_ref')->nullable();
            //datos nucleo familiar
            $table->string('nombre1')->nullable();
            $table->string('parentesco1')->nullable();
            $table->string('edad1')->nullable();
             $table->string('nivel_educativo1')->nullable();
             $table->string('ocupacion1')->nullable();
             $table->string('nombre2')->nullable();
             $table->string('parentesco2')->nullable();
             $table->string('edad2')->nullable();
             $table->string('nivel_educativo2')->nullable();
             $table->string('ocupacion2')->nullable();
             $table->string('nombre3')->nullable();
             $table->string('parentesco3')->nullable();
             $table->string('edad3')->nullable();
             $table->string('nivel_educativo3')->nullable();
             $table->string('ocupacion3')->nullable();
             $table->string('nombre4')->nullable();
             $table->string('parentesco4')->nullable();
             $table->string('edad4')->nullable();
             $table->string('nivel_educativo4')->nullable();
             $table->string('ocupacion4')->nullable();
             $table->string('nombre5')->nullable();
             $table->string('parentesco5')->nullable();
             $table->string('edad5')->nullable();
             $table->string('nivel_educativo5')->nullable();
             $table->string('ocupacion5')->nullable();
             $table->string('nombre6')->nullable();
             $table->string('parentesco6')->nullable();
             $table->string('edad6')->nullable();
             $table->string('nivel_educativo6')->nullable();
             $table->string('ocupacion6')->nullable();
             //informacion academica
             $table->string('institucion_edu1')->nullable();
             $table->string('año_finalizado1')->nullable();
             $table->string('titulo_obtenido1')->nullable();
             $table->string('institucion_edu2')->nullable();
             $table->string('año_finalizado2')->nullable();
             $table->string('titulo_obtenido2')->nullable();
             $table->string('institucion_edu3')->nullable();
             $table->string('año_finalizado3')->nullable();
             $table->string('titulo_obtenido3')->nullable();
             $table->string('institucion_edu4')->nullable();
             $table->string('año_finalizado4')->nullable();
             $table->string('titulo_obtenido4')->nullable();
             $table->string('institucion_edu5')->nullable();
             $table->string('año_finalizado5')->nullable();
             $table->string('titulo_obtenido5')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datos_personales');
    }
}
