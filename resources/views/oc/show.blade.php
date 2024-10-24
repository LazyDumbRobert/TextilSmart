@extends('layouts.dashboard')

@section('titulo')
    Orden de Compra 
@endsection

@section('contenido')
    <h2 class="text-xl font-bold">Orden de Compra</h2>

    <livewire:revision-orden-compra  :ordencompra="$ordencompra" />
@endsection