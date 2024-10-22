@extends('layouts.dashboard')

@section('titulo')
    Editar Producto
@endsection

@section('contenido')
    <h2 class="text-xl font-bold">{{ $producto->nombre }}</h2>
    <div class="p-10">
        <livewire:editar-producto :producto="$producto"/>
    </div>
@endsection