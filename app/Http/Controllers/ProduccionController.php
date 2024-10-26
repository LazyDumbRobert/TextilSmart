<?php

namespace App\Http\Controllers;

use App\Models\OrdenProduccion;
use Illuminate\Http\Request;

class ProduccionController extends Controller
{
    public function index()
    {
        return view('produccion.index');
    } 

    public function create()
    {
        return view('produccion.create');
    } 

    
    public function show(OrdenProduccion $ordenproduccion)
    {
        return view('produccion.show', compact('ordenproduccion'));
    } 

    public function rendimiento(OrdenProduccion $ordenproduccion)
    {
        return view('produccion.rendimiento',compact('ordenproduccion'));
    }
}
