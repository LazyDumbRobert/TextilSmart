@extends('layouts.dashboard')

@section('titulo')
    Control de Inventario
@endsection

@section('contenido')
    <h2 class="text-xl font-bold">Control de Inventario</h2>
    <div class="p-10">
        <livewire:inventario />
    </div>
@endsection