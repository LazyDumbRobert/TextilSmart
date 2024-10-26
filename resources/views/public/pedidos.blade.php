@extends('layouts.public')

@section('titulo')
    Pedidos
@endsection

@section('contenido')
    @if ($pedidos->count() > 0)
        <div class="p-5 w-1/2 mx-auto">
            <h2 class="text-4xl font-bold">Mis Pedidos</h2>

            <div class="flex flex-col gap-10 mt-10">
                @foreach ($pedidos as $pedido)
                    @php
                        $color = ($pedido->estado_id == 1) ? 'border-yellow-600' : (($pedido->estado_id == 2) ? 'border-orange-600' : 'border-green-600')
                    @endphp
                    <a href="{{ route('pedidospublic.show',$pedido) }}" class="p-5 flex flex-col border-l-8 {{ $color }} border hover:bg-gray-200">
                        <p><span class="font-bold">Monto:</span> Q{{ $pedido->monto_total }}</p>
                        <p><span class="font-bold">Costo de envío: </span>{{ $pedido->costo_envio }}</p>
                        <p><span class="font-bold">Realizado hace: </span>{{ $pedido->fecha_pedido->diffForHumans() }}</p>
                    </a>
                @endforeach
            </div>

        </div> 
    @else
    <div class="flex flex-col justify-center items-center gap-5">
        <p class="text-center text-4xl">Explora nuestros productos</p>
        <a href="{{ route('productos') }}" class="btn bg-indigo-600 bg-indigo-800">
            Ver productos
        </a>
    </div>
    @endif
   
@endsection