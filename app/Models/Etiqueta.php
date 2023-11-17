<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etiqueta extends Model
{
    public $timestamps = false; 

    use HasFactory;

    /*** Obtener las etiquetas asociadas a esta receta.*/
    public function recetas()
    {
        return $this->belongsToMany(Recetas::class);
    }
}
