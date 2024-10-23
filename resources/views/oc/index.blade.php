@extends('layouts.dashboard')

@section('titulo')
    Ordenes de Compra
@endsection

@section('contenido')
    <h2 class="text-xl font-bold">Ordenes de Compra</h2>
    <div class="p-10">
        <livewire:ordenes-compra />
    </div>
@endsection