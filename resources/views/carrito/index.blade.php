@extends('layouts.public')

@section('titulo')
    Carrito 
@endsection

@section('contenido')
    <div class="p-5">
       <x-alertas />
        <livewire:carrito />
   </div>
@endsection