@extends('layouts.dashboard')

@section('titulo')
    Transacciones
@endsection

@section('contenido')
    <h2 class="text-xl font-bold">Transacciones {{ $materiaprima->nombre }}</h2>
    <livewire:transacciones :materiaprima="$materiaprima"/>
@endsection