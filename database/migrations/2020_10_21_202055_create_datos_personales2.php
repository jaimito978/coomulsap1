<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatosPersonales2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_personales2', function (Blueprint $table) {
            $table->id();
            //informacion laboral
            $table->integer('aspirante_id')->nullable();
            $table->string('nombre_de_la_emp1')->nullable();
            $table->string('tiempo1')->nullable();
            $table->string('motivo_retiro1')->nullable();
            $table->string('observaciones_y_fun1')->nullable();
            $table->string('nombre_de_la_emp2')->nullable();
            $table->string('tiempo2')->nullable();
            $table->string('motivo_retiro2')->nullable();
            $table->string('observaciones_y_fun2')->nullable();
            $table->string('nombre_de_la_empresa3')->nullable();
            $table->string('tiempo3')->nullable();
            $table->string('motivo_retiro3')->nullable();
            $table->string('observaciones_y_fun3')->nullable();
            $table->string('nombre_de_la_empresa4')->nullable();
            $table->string('tiempo4')->nullable();
            $table->string('motivo_retiro4')->nullable();
            $table->string('observaciones_y_fun4')->nullable();
            $table->string('nombre_de_la_empresa5')->nullable();
            $table->string('tiempo5')->nullable();
            $table->string('motivo_retiro5')->nullable();
            $table->string('observaciones_y_fun5')->nullable();
            $table->string('nombre_de_la_empresa6')->nullable();
            $table->string('tiempo6')->nullable();
            $table->string('motivo_retiro6')->nullable();
            $table->string('observaciones_y_fun6')->nullable();
            //salud
            $table->string('frecuencia1')->nullable();
            $table->string('nivel_de_consumo1')->nullable();
            $table->string('observaciones1')->nullable();
            $table->string('frecuencia2')->nullable();
            $table->string('nivel_de_consumo2')->nullable();
            $table->string('observaciones2')->nullable();
            $table->string('frecuencia3')->nullable();
            $table->string('nivel_de_consumo3')->nullable();
            $table->string('observaciones3')->nullable();
            $table->string('frecuencia4')->nullable();
            $table->string('nivel_de_consumo4')->nullable();
            $table->string('observaciones4')->nullable();
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
        Schema::dropIfExists('datos_personales2');
    }
}
