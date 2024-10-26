<?php

use App\Http\Controllers\CarritoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NotificacionController;
use App\Http\Controllers\PedidoPublicController;

Route::get('/',[PublicController::class,'index'])->name('home');
Route::get('/productos',[PublicController::class,'productos'])->name('productos');
Route::get('/pedido/exito',[PublicController::class,'exito'])->name('pedido.exito');


Route::get('/mis-pedidos',[PedidoPublicController::class,'index'])->name('pedidospublic')->middleware(['auth','verified']);
Route::get('/mi-pedido/{pedido}',[PedidoPublicController::class,'show'])->name('pedidospublic.show')->middleware(['auth','verified']);

Route::get('/producto/{producto:nombre}',[ProductoController::class,'index'])->name('producto');
Route::get('/carrito',[CarritoController::class,'index'])->name('carrito')->middleware(['auth','verified']);
Route::get('/carrito/finalizando-pedido',[CarritoController::class,'FinalizarPedido'])->name('carrito.FinalizarPedido')->middleware(['auth','verified']);



Route::get('/contactanos',[PublicController::class,'contactanos'])->name('contactanos');

Route::get('/dashboard',[DashboardController::class,'index'])->middleware(['auth', 'verified','role.admin'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Notificaciones
Route::get('/notificaciones',NotificacionController::class)->middleware(['auth', 'verified','role.admin'])->name('notificaciones');

require __DIR__.'/auth.php';
require __DIR__.'/inventario.php';
require __DIR__.'/proveedores.php';
require __DIR__.'/pedidos.php';