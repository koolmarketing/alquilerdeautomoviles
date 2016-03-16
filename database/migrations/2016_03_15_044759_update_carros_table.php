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
        $table->string('soat');    
        $table->string('rodamiento'); 
        $table->string('tecnico_mecanica'); 
        $table->string('tarjeta_propiedad');    
        $table->string('cedula_ciudadania');
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
         $table->dropColumn('soat');    
         $table->dropColumn('rodamiento'); 
         $table->dropColumn('tecnico_mecanica'); 
         $table->dropColumn('tarjeta_propiedad');    
         $table->dropColumn('cedula_ciudadania');
     });
 }
}
