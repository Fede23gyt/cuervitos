<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profesores extends Model
{
    //
   protected $fillable = ['dni', 'nombre', 'telefono','mail','estado','foto_profe'];
}
