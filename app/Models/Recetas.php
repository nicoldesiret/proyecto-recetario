<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Recetas extends Model
{
    use HasFactory;
    protected $fillable = ['titulo', 'descripcion', 'tipoComida', 'archivo_ubicacion', 'archivo_nombre'];


    /*public function user()
    {
        return $this->belongsTo(User::class);
    }*/

    public function comentarios(): HasMany
    {
        return $this->hasMany(Comentarios::class);
    }
}
