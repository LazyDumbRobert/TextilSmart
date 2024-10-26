@extends('layouts.dashboard')

@section('titulo')
    Pedidos
@endsection

@section('contenido')
    <div>
        <x-alertas />
        <h2 class="text-4xl font-bold">Pedidos</h2>
        <livewire:pedidos />
    </div>
@endsection