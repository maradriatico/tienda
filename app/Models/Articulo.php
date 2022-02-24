<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Articulo extends Model
{
    use HasFactory;


    public function lineas(){
        return $this->hasMany(Linea::class);
    }

    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }
}
