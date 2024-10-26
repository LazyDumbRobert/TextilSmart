<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduccionController;

//Rutas de inventario de productos
Route::get('/produccion',[ProduccionController::class,'index'])->name('produccion');
Route::get('/produccion/create',[ProduccionController::class,'create'])->name('produccion.create');
