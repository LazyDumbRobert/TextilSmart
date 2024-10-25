@extends('layouts.public')

@section('titulo')
    Carrito 
@endsection

@section('contenido')
    <div class="w-full">
        <div class="p-5 flex justify-center items-center flex-col">
            <h1 class="font-bold text-4xl uppercase">Finalizando Pedido</h1>
            <livewire:finalizar-pedido />
        </div>

    </div>
@endsection