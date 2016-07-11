<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CarritosMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carritos', function (Blueprint $table) {
            
            $table->increments('id');

            //Añadimos la clave foranea de Usuario - No esta claro porque unsigned

            
            $table->integer('usuario_id')->unsigned();
            
            //Indicamos cual es la clave foranea de esta tabla
            
            $table->foreign('usuario_id')->references('id')->on('usuarios');

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
        Schema::drop('carritos');
    }
}
