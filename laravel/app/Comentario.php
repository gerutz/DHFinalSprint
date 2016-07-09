<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $table = 'comentarios';

    protected $fillable = array('usuario_id');

    // Definimos relaciones de las tablas

    public function producto(){

        return $this->belongsTo('App\Producto');

    }
}
