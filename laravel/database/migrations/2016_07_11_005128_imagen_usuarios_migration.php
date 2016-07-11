<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ImagenUsuariosMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagen_usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('label',200);

            // Añadimos clave foranea Usuario

            $table->integer('usuario_id')->unsigned();
            
            // Indicamos la clave foranea de esta tabla
            
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
        Schema::drop('imagen_usuarios');
    }
}
