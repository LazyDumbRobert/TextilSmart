@extends('layouts.public')

@section('titulo')
    Pedidos
@endsection

@section('contenido')
    <div class="p-5">
        <h2 class="text-4xl font-bold">Mis Pedidos</h2>

        @foreach ($pedidos as $pedido)
            <p>PEDIDO</p>
        @endforeach
    </div>
@endsection