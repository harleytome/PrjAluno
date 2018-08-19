<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CorrectTableStudants01 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('studants',function(Blueprint $table){
           $table->string('use_alias',1)->change();
           $table->string('logged_in',1);
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
        Schema::table('studants',function(Blueprint $table){
           $table->dropColumn('logged_in');
        });
    }
}
