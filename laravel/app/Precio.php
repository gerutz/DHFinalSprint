<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Precio extends Model
{
    protected $table = 'precios';

    protected $fillable = array('fecha', 'producto_id');

    //Definimos las relaciones del Modelo

    public function producto(){
        
        return $this->belongsTo('App\Producto');
    }
}
