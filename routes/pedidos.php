<?php

use App\Http\Controllers\PedidosController;
use Illuminate\Support\Facades\Route;

//Rutas de inventario de productos
Route::get('/pedidos',[PedidosController::class,'index'])->name('pedidos');
Route::get('/pedidos/show/{pedido}',[PedidosController::class,'show'])->name('pedidos.show');
