<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    
    public function index()
    {
        $productos = Producto::limit(3)->get();
        return view('public.index',compact(['productos']));
    }

    public function productos()
    {
        $productos = Producto::all();
        return view('public.productos', compact(['productos']));
    }
}
