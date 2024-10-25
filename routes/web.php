<?php

use App\Http\Controllers\CarritoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NotificacionController;

Route::get('/',[PublicController::class,'index'])->name('home');
Route::get('/productos',[PublicController::class,'productos'])->name('productos');
Route::get('/pedido/exito',[PublicController::class,'exito'])->name('pedido.exito');
Route::get('/mis-pedidos',[PublicController::class,'pedidos'])->name('pedidios');

Route::get('/producto/{producto:nombre}',[ProductoController::class,'index'])->name('producto');
Route::get('/carrito',[CarritoController::class,'index'])->name('carrito');
Route::get('/carrito/finalizando-pedido',[CarritoController::class,'FinalizarPedido'])->name('carrito.FinalizarPedido');



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