@extends('layouts.dashboard')

@section('titulo')
    Ordenes de Producción
@endsection

@section('contenido')
    <div>
        <x-alertas />
        <h2 class="text-4xl font-bold">Ordenes de Produccion</h2>
        <livewire:ordenes-produccion />
    </div>
@endsection