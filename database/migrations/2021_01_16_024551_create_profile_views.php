<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileViews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_views', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable(); //user viewing, or if not loggedin
            $table->string('profileuser_id')->nullable(); // id of user being viewed,if viewing user profile
            $table->string('profileorg_id')->nullable(); // id of org being viewed,if viewing org profile
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
        Schema::dropIfExists('profile_views');
    }
}
