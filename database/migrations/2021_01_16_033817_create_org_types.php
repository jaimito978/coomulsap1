<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrgTypes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('org_types', function (Blueprint $table) {
            $table->id();
            $table->string('label')->nullable();//text for this type,varchar255
            $table->string('slug')->nullable(); //URL  slug  for this  type, based on label, varchar255
            $table->string('description')->nullable(); // paragraph
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
        Schema::dropIfExists('org_types');
    }
}
