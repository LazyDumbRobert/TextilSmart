<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProveedoresController;

//Rutas de inventario de productos
Route::get('/proveedores',[ProveedoresController::class,'index'])->name('proveedores');
Route::get('/proveedores/create',[ProveedoresController::class,'create'])->name('proveedores.create');
