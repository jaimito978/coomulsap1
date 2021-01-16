<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVerifiedUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('verified_users', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable(); //the user that is verified or claims to be verified
            $table->string('verifified_by_admin')->nullable(); //if the admin verifies that indeed they have this role
            $table->string('role_id')->nullable(); //the role that this user has
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
        Schema::dropIfExists('verified_users');
    }
}
