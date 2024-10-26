@extends('layouts.dashboard')

@section('titulo')
    Crear Orden De Producción
@endsection

@section('contenido')
    <div>
        <x-alertas />
        <h2 class="text-4xl font-bold">Crear Orden De Producción</h2>
        <livewire:crear-orden-produccion />
    </div>
@endsection