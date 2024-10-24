@extends('layouts.dashboard')

@section('titulo')
    Proveedores
@endsection

@section('contenido')
    <h2 class="text-xl font-bold">Proveedores</h2>

    <x-alertas />
    <div class="flex justify-end">
        <a href="{{ route('proveedores.create') }}" class="btn bg-indigo-600 hover:bg-indigo-800">
            <i class="fa-solid fa-plus"></i>
            Crear Proveedor
        </a>
    </div>
   

    <div class="p-10">
        <livewire:proveedores />
    </div>
@endsection