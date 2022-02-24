<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    /**
     * Get the articulo associated with the Categoria
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function articulos(){
        return $this->hasMany(Articulo::class);
    }
}
