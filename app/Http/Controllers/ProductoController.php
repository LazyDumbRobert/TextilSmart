<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index(Producto $producto)
    {
        return view('producto.index', compact('producto'));
    }
}
