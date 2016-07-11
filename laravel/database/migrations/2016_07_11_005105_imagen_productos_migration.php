<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ImagenProductosMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagen_productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('label',200);

            // Añadimos clave foranea Producto

            $table->integer('producto_id')->unsigned();

            // Indicamos culas es la clave foranea

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
        Schema::drop('imagen_productos');
    }
}
