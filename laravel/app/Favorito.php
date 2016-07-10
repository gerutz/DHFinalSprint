<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorito extends Model
{
    protected $table = 'favoritos';

    protected $fillable = array('usuario_id', 'producto_id');

    // Definimos las relaciones del modelo

    public function usuario(){

        return $this->belongsTo('App\Usuario');
    }
}
