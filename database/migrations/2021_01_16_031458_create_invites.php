<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvites extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invites', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();//the id of the user who is sending the invite
            $table->string('email')->nullable(); //the email of the user we are inviting
            $table->string('code')->nullable(); //a randon code used to check this is a real invite, varchar 255
            $table->string('comment')->nullable(); //a comment used by admins, varchar255
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
        Schema::dropIfExists('invites');
    }
}
