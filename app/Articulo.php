<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    //
    /*protected $fillable = [
        "nombre_articulo",
        "precio",
        "pais_origen",
        "observaciones",
        "seccion"
    ];

    public function cliente(){
        return $this->belongsTo("App\Cliente");
    }*/

    public function calificaciones(){
        return $this->morphMany("App\Calificaciones", "calificacion");
    }
}
