@extends('layouts.dashboard')

@section('titulo')
    Control de Inventario de Materia Prima
@endsection

@section('contenido')
    <h2 class="text-xl font-bold"> Control de Inventario de Materia Prima</h2>
    <div class="p-10">
        <livewire:inventario-m-p />
    </div>
@endsection