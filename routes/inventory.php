<?php

use App\Http\Controllers\InventarioMPController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventarioProductosController;

//Rutas de inventario de productos
Route::get('/inventario/productos',[InventarioProductosController::class,'index'])->name('inventarioProductos');
Route::get('/inventario/productos/edit/{producto:nombre}',[InventarioProductosController::class,'edit'])->name('inventarioProductos.edit');


//Rutas de inventario de Materia Prima
Route::get('/inventario/materia-prima',[InventarioMPController::class,'index'])->name('inventarioMP');
Route::get('/inventario/materia-prima/edit/{materiaprima:nombre}',[InventarioMPController::class,'edit'])->name('inventarioMP.edit');