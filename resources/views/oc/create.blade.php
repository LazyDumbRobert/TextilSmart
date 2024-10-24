@extends('layouts.dashboard')

@section('titulo')
    Crear Orden de Compra
@endsection

@section('contenido')
    <h2 class="text-xl font-bold">Crear Orden de Compra</h2>
    
    <x-alertas />

    <div class="p-10">
        <livewire:crear-orden-compra />
    </div>
@endsection