@extends('layouts.public')

@section('titulo')
    Producto {{ $producto->nombre }}
@endsection

@section('contenido')
    <livewire:producto-carrito :producto="$producto" />
@endsection