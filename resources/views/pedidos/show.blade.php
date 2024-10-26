@extends('layouts.dashboard')

@section('titulo')
    Pedido No. {{ $pedido->id }}
@endsection

@section('contenido')
    <div>
        <h2 class="text-4xl font-bold">Pedido No. {{ $pedido->id }}</h2>
        <livewire:mostrar-pedido :pedido="$pedido"/>
    </div>
@endsection