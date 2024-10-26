@extends('layouts.dashboard')

@section('titulo')
    Rendimiento Orden Producción NO. {{ $ordenproduccion->id }}
@endsection

@section('contenido')
    <div>
        <x-alertas />
        <h2 class="text-4xl font-bold">Rendimiento Orden Producción NO. {{ $ordenproduccion->id }}</h2>
        <livewire:rendimiento-orden-produccion :ordenproduccion="$ordenproduccion" />
    </div>
@endsection