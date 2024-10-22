<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventarioController;

Route::get('/inventario',[InventarioController::class,'index'])->name('inventario');