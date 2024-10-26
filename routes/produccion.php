<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduccionController;

//Rutas de inventario de productos
Route::get('/produccion',[ProduccionController::class,'index'])->name('produccion');
Route::get('/produccion/create',[ProduccionController::class,'create'])->name('produccion.create');
Route::get('/produccion/orden-produccion/{ordenproduccion}',[ProduccionController::class,'show'])->name('produccion.show');
Route::get('/produccion/orden-produccion/rendimiento/{ordenproduccion}',[ProduccionController::class,'rendimiento'])->name('produccion.rendimiento');
