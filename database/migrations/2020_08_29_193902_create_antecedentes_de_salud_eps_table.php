<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAntecedentesDeSaludEpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(191);   
        Schema::create('antecedentes_de_salud_eps', function (Blueprint $table) {
            $table->id();
            $table->integer('aspirante_id')->nullable();
            $table->string('eps')->nullable();
            $table->string('afp')->nullable();
            $table->string('ultima_consulta_medica')->nullable();
            $table->string('cirugias')->nullable();
            $table->string('accidentes_sufridos')->nullable();
            $table->string('antecedentes_enfermedades')->nullable();
            $table->string('trastornos_psicotricos')->nullable();
            $table->string('incapacidad_mas_larga')->nullable();
            $table->string('enfermedades_respiratorias')->nullable();
            $table->string('enfermedades_incapacidad')->nullable();
            $table->string('dolores_cronicos')->nullable();
            $table->string('observaciones')->nullable();
            $table->string('motivo_consulta')->nullable();
            $table->string('intoxicaciones')->nullable();
            $table->string('fracturas')->nullable();
            //competencias especificas
            $table->string('word')->nullable();
            $table->string('excel')->nullable();
            $table->string('ppoint')->nullable();
            $table->string('otros')->nullable();
            $table->string('riquesa_del_vocavulario')->nullable();
            $table->string('fluidez_verbal')->nullable();
            $table->string('precision')->nullable();
            $table->string('valor_global')->nullable();
            $table->string('pedagogia')->nullable();
            $table->string('legislacion')->nullable();
            //motivacion
            $table->text('ver_perfil_y_funciones')->nullable();
            $table->text('observaciones2')->nullable();
            $table->text('motivacion_en_coomulsap')->nullable();
            $table->text('proyecto_a_mediano')->nullable();
            $table->text('disponibilidad_puesto')->nullable();
            $table->text('retribucion_expectativas')->nullable();
            //historia familiar
            $table->string('historia_familiar')->nullable();
            $table->string('concepto_segundo_entrevistador')->nullable();
            $table->string('oculto_informacion')->nullable();
            $table->string('responsable')->nullable();

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
        Schema::dropIfExists('antecedentes_de_salud_eps');
    }
}
