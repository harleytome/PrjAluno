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
          $table->integer('id_school')->nullable(); //->references('id')->on('schools');
          $table->string('photo');
          $table->string('alias')->nullable();
          $table->char('use_alias')->default('N');
          $table->date('birthdate')->nullable();
          $table->string('class_name')->nullable();
          $table->integer('current_year')->nullable();
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
