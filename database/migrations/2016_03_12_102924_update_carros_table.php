<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateCarrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
           Schema::table('carros', function($table)
        {         
            $table->integer('vidrios_electricos');    
            $table->integer('rastreador'); 
            $table->integer('rines_lujo'); 
            $table->integer('full_equipo');    
            $table->integer('dvd');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('carros', function ($table) {
            $table->dropColumn('vidrios_electricos');
            $table->dropColumn('rastreador');
            $table->dropColumn('rines_lujo');
            $table->dropColumn('full_equipo');
            $table->dropColumn('dvd');
            
        });
    }
}
