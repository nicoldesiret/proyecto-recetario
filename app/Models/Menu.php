<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $fillable =['nombre','user_id'];
    public $timestamps = false; 

    public function recetas()
    {
        //If your pivot table contains extra attributes, you must specify them when defining the relationship
        return $this->belongsToMany(Recetas::class)->withPivot('dia', 'tipo_comida');
    }
    
    public function user(){
        return $this->belongsTo(User::class);
    }

}
