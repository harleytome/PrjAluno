<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableStudants extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('studants',function(Blueprint $table){
          $table->increments('id');
          $table->integer('id_user')->references('id')->on('users');
          $table->integer('id_school')->references('id')->on('schools');
          $table->string('photo');
          $table->string('alias');
          $table->char('use_alias')->default('N');
          $table->date('birthdate');
          $table->string('class_name');
          $table->integer('current_year');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('studants');

    }
}
