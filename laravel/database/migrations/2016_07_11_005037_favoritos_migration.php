<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FavoritosMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favoritos', function (Blueprint $table) {
            $table->increments('id');

            // Añadimos clave foraneas de Usuario

            $table->integer('usuario_id')->unsigned();

            $table->foreign('usuario_id')->references('id')->on('usuarios');

            // Añadimos clave foraneas de Usuario

            $table->integer('producto_id')->unsigned();

            $table->foreign('producto_id')->references('id')->on('productos');

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
        Schema::drop('favoritos');
    }
}
