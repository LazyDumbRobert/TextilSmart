<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\Producto;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    
    public function index()
    {
        $productos = Producto::where('stock', '>', 1)->limit(3)->get();
        return view('public.index',compact(['productos']));
    }

    public function productos()
    {
        $productos = Producto::where('stock', '>', 1)->get();
        return view('public.productos', compact(['productos']));
    }

    public function exito(Request $request)
    {
         if (!$request->session()->has('token')) {
            return redirect()->route('home'); 
        }

        $token = $request->session()->get('token');
        $request->session()->forget('token');

        return view('public.exito', compact('token'));
        return view('public.exito');
    }

}
