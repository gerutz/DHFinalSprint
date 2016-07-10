<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagen_producto extends Model{

    protected $table = 'imagen_produtos';

    protected $fillable = array('producto_id', 'label');

    // Definimos las relaciones del Modelo

    public function producto(){

        return $this->belongsTo('App\Producto');
    }

}
