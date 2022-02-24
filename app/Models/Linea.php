<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Linea extends Model
{
    use HasFactory;

    public function articulo(){
        return $this->belongsTo(Articulo::class);
    }

    public function pedido(){
        return $this->belongsTo(Pedido::class);
    }

}
