<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidoPublicController extends Controller
{
    
    public function index()
    {
        $pedidos = Pedido::where('user_id',auth()->user()->id)->get();
        return view('public.pedidos',compact('pedidos'));
    }

    public function show(Pedido $pedido)
    {
        return view('public.pedido',compact('pedido'));
    }
}
