<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('invite_user_id')->nullable();//the userid of the user who invited this user if any
            $table->string('username')->nullable(); //a unique username and URLslug("petervandijck")
            $table->string('name')->nullable(); //full name ("peter van Dijck")
            $table->string('title')->nullble(); //title("Founder of This")
            $table->string('profile_paragraph')->nullable();//profile introduction text
            $table->strint('profile_twitterusername')->nullable(); //enter you twitter username
            $table->string('country_id')->nullable(); //link to countries tible
            $table->string('city')->nullable(); //textfield
            $table->string('profile_lik1')->nullable(); //link to your website(http://likedin.com/petervan)
            $table->string('profile_link1label')->nullable(); //label for that link (Linkedln)
            $table->string('profile_link2label')->nullable(); 
            $table->string('profile_link3')->nullable();
            $table->string('profile_link3label')->nullable();
            $table->string('profile_pictureurl')->nullable(); //URL to profile picture
            $table->string('is_admin')->nullable(); //number,0 by default,gives access to backend nova admin if 1 or higher(we can use number for future admin levels)



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
        Schema::dropIfExists('users');
    }
}
