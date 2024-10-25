@extends('layouts.public')

@section('titulo')
    Bienvenido
@endsection

@section('contenido')
   <div class="p-5 flex flex-col justify-center items-center text-4xl ">
        <p class="font-bold">
            <i class="fa-solid fa-circle-check text-green-500"></i>
            ¡Pedido Finalizado Correctamente!
        </p>
        <p>Puede darle seguimiento desde Mis Pedidos</p>
   </div>
@endsection