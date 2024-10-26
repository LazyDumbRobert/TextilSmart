@extends('layouts.dashboard')

@section('titulo')
    Orden de Producción {{ $ordenproduccion }}
@endsection

@section('contenido')
    <div>
        <x-alertas />
        <h2 class="text-4xl font-bold">Orden de Producción: {{ $ordenproduccion->id }}</h2>
        <livewire:orden-produccion :ordenproduccion="$ordenproduccion" />
    </div>
@endsection