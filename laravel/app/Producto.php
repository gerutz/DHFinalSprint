<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';

    protected $fillable = array('titulo','descripcion','stock');

    //Definimos las relaciones del Modelo

    public function carrito(){

        return $this->belongsTo('App\Carrito');

    }

    public function usuario(){

        return $this->belongsTo('App\Usuario');
    }

    public function comentario(){

        return $this->hasMany('App\Comentario');

    }

    public function imagen_producto(){

        return $this->hasMany('App\Imagen_producto');

    }

    public function precio(){

        return $this->hasMany('App\Precio');

    }

}
