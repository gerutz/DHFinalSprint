<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuarios';

    protected  $fillable = array('nombre', 'apellido', 'nombre_usuario', 'email');

    //Definimos las relaciones del modelo

    public function carrito(){

        return $this->hasOne('App\Carrito');

    }

    public function producto(){

        return $this->hasMany('App\Producto');

    }

    public function favorito(){

        return $this->hasMany('App\Favorito');

    }

    public function imagen_usuario(){

        return $this->hasOne('App\Imagen_usuario');
        
    }

}
