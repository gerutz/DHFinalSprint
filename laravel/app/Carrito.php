<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    // Nombre tabla en MYSQL

    protected $table = 'carritos';

    // Atributos que se pueden asignar de manera masiva

    protected $fillable = array('usuario_id');


    // Relacion de Carrito con Usuario

    public function usuario(){

        return $this->belongsTo('App\Usuario');

    }
    
    public function producto(){
        
        return $this->hasMany('App\Producto');
    }

}
