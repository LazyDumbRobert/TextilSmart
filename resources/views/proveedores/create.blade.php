@extends('layouts.dashboard')

@section('titulo')
    Crear Proveedor
@endsection

@section('contenido')
    <h2 class="text-xl font-bold">Crear Proveedor</h2>

    <div class="p-10">
        <livewire:crear-proveedor />
    </div>
@endsection