<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    public function lineas(){
        return $this->hasMany(Linea::class);
    }

    public function usuario(){
        return $this->belongsTo(User::class);
    }
}
