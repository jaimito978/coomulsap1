<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluacionGerencia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluacion_gerencia', function (Blueprint $table) {
            $table->id();
            $table->integer('aspirante_id')->nullable();
            $table->string('fecha')->nullable();
            $table->string('nombre_del_proyecto')->nullable();
            $table->string('director_del_proyecto')->nullable();
            $table->string('nombres_y_apellido_del_aspirante')->nullable();
            $table->string('profesion_y_cargo_al_que_aspira')->nullable();
            $table->string('hora_citado')->nullable();
            $table->string('actividad')->nullable();
            $table->string('metas')->nullable();
            $table->string('articula_ideas')->nullable();
            $table->string('se_expresa')->nullable();
            $table->string('escucha')->nullable();
            $table->string('ideas')->nullable();
            $table->string('entorno')->nullable();
            $table->string('administracion')->nullable();
            $table->string('conocimiento')->nullable();
            $table->string('metodologia')->nullable();
            $table->string('manejo')->nullable();
            $table->string('presentacion')->nullable();
            $table->string('actitud')->nullable();
            $table->string('observaciones_generales')->nullable();
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
        Schema::dropIfExists('evaluacion_gerencia');
    }
}
