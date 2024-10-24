<?php

use App\Http\Controllers\InventarioMPController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventarioProductosController;
use App\Http\Controllers\OrdenCompraController;

//Rutas de inventario de productos
Route::get('/inventario/productos',[InventarioProductosController::class,'index'])->name('inventarioProductos');
Route::get('/inventario/productos/edit/{producto:nombre}',[InventarioProductosController::class,'edit'])->name('inventarioProductos.edit');


//Rutas de inventario de Materia Prima
Route::get('/inventario/{materiaprima:nombre}/transacciones',[InventarioMPController::class,'transacciones'])->name('inventarioMP.transacciones');
Route::get('/inventario/materia-prima',[InventarioMPController::class,'index'])->name('inventarioMP');
Route::get('/inventario/materia-prima/edit/{materiaprima:nombre}',[InventarioMPController::class,'edit'])->name('inventarioMP.edit');


//ordenes de compra
Route::get('/ordenes-compra',[OrdenCompraController::class,'index'])->name('oc');
Route::get('/ordenes-compra/create',[OrdenCompraController::class,'create'])->name('oc.create');
Route::get('/ordenes-compra/show/{ordencompra}',[OrdenCompraController::class,'show'])->name('oc.show');