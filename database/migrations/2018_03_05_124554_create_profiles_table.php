<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->boolean('isOwner')->default(0);
            $table->string('business_name');
            $table->string('business_email')->unique();
            $table->string('business_cont_no')->unique();
            $table->text('website');
            $table->text('location');
            $table->text('occupation');
            $table->text('full_address');
            $table->integer('types_of_business');
            $table->text('prod_or_serv_offe');
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
        Schema::dropIfExists('profiles');
    }
}
