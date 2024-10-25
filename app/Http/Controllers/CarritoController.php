<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarritoController extends Controller
{
    public function index()
    {
        $cartCollection = \Cart::getContent();
        return view('carrito.index');
    }

    public function FinalizarPedido()
    {
        return view('carrito.pedido');
    }
}
