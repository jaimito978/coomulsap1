<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVerifiedRoles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('verified_roles', function (Blueprint $table) {
            $table->id();
            $table->string('label')->nullable(); // Label for this role. Admins create roles
            $table->string('slug')->nullable(); // URL-cleaned version of the label (does not change if label is edited)
            $table->string('description')->nullable(); // description text, that is shown to users.
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
        Schema::dropIfExists('verified_roles');
    }
}
