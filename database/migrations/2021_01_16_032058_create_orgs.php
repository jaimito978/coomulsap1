<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrgs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orgs', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(); // the name of the org, varchar255
            $table->string('slug')->nullable(); //a URL slug for this org, generated from the org name, varchar255
            $table->string('type')->nullable(); //the type of organization,link to  org_types table
            $table->string('profile_paragraph')->nullable(); //profile introduction text, varchar255
            $table->string('profile_twitterusername')->nullable(); //twitter username of company,varchar255
            $table->string('profile_link1')->nullable();//link to your website(http://likedin.com/petervan), varchar255
            $table->string('profile_link1label')->nullable();//label for that link (Linkedln),varchar255
            $table->string('profile_link2')->nullable();
            $table->string('profile_link2label')->nullable();
            $table->string('profile_link3')->nullable();
            $table->string('profile_link3label')->nullable();
            $table->string('profile_pictureurl')->nullable(); //URL to profile picture
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
        Schema::dropIfExists('orgs');
    }
}
