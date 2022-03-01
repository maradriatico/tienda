<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use Illuminate\Http\Request;

class CarritoController extends Controller
{
    public function index()
    {
        return view('carrito', [
            'articulos' => Articulo::all()
        ]);
    }

    public function agregar(Articulo $id){
        //dd($id);
        return redirect()->back()
            ->with('success', 'Articulo borrado correctamente');
    }
}
