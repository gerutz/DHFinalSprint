<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagen_usuario extends Model
{
    protected $table = 'imagen_usuarios';

    protected $fillable = array('usuario_id','label');

    // Definimos las relaciones del modelo

    public function usuario(){
        
        return $this->belongsTo('App\Usuario');
    }
}
