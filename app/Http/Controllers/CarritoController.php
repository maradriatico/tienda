<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use Illuminate\Http\Request;

class CarritoController extends Controller
{
    public function index()
    {
        return view('index', [
            'articulos' => Articulo::all()
        ]);
    }

    public function añadir(Request $Articulo){

        return redirect()->back()
            ->with('success', 'Empleado borrado correctamente');
    }
}
