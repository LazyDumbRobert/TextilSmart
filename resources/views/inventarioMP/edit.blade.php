@extends('layouts.dashboard')

@section('titulo')
    Editar Registro Materia Prima
@endsection

@section('contenido')
    <h2 class="text-xl font-bold">{{ $materiaprima->nombre }}</h2>
    <div class="p-10">
        <livewire:editar-materia-prima :materiaprima="$materiaprima"/>
    </div>
@endsection