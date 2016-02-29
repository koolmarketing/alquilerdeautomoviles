<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('propietario');
            $table->string('email');
            $table->string('telefono_fijo');
            $table->string('celular');
            $table->string('actividad');
            $table->string('ciudad');
            $table->string('direccion');
            $table->string('marca');
            $table->string('linea');
            $table->string('modelo');
            $table->string('color');
            $table->string('placa');
            $table->string('transmision');
            $table->string('combustible');
            $table->string('carroceria');
            $table->string('pasajeros');
            $table->string('precio_dia');
            $table->string('foto_1');
            $table->string('foto_2');
            $table->string('foto_3');
            $table->text('observaciones');
            $table->integer('aire_acondicionado');
            $table->integer('_4x4');
            $table->integer('freno_abs');
            $table->integer('cojineria_cuero');
            $table->integer('mascotas');
            $table->integer('entrega_domicilio');            
            $table->integer('airbag_conductor');
            $table->integer('airbag_copiloto');
            $table->integer('radio');
            $table->integer('cd_mp3');
            $table->integer('usb_mp3');
            $table->integer('activo');

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
        Schema::drop('carros');
    }
}
