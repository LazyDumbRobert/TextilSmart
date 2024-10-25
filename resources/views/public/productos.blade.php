@extends('layouts.public')

@section('titulo')
    Productos
@endsection

@section('contenido')


    <div class="my-10">
        <div class="text-center">
            <h2 class="uppercase  font-bold text-3xl">Todos nuestros productos</h2>
        </div>

        <x-productos :productos="$productos" class="grid-cols-1 md:grid-cols-4 xl:grid-cols-5"/>
    </div>
@endsection