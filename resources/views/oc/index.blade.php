@extends('layouts.dashboard')

@section('titulo')
    Ordenes de Compra
@endsection

@section('contenido')
    <h2 class="text-xl font-bold">Ordenes de Compra</h2>
    
    <x-alertas />

    <div class="mt-5">
        <a href="{{ route('oc.create') }}" class="btn bg-indigo-600 hover:bg-indigo-800">
            <i class="fa-solid fa-plus"></i>
            Crear Orden de Compra
        </a>
    </div>
    <div class="p-10">
        <livewire:ordenes-compra />
    </div>
@endsection