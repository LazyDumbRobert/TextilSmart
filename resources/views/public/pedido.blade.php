@extends('layouts.public')

@section('titulo')
    Pedido No. {{ $pedido->id }}
@endsection

@section('contenido')
    <div class="w-1/2 mx-auto p-10">
        <h2 class="text-4xl font-bold">Pedido No. {{ $pedido->id }}</h2>
        <livewire:mostrar-pedido :pedido="$pedido"/>
    </div>
@endsection