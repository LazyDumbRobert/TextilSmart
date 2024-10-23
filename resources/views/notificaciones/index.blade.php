@extends('layouts.dashboard')

@section('titulo')
    Notificaciones
@endsection

@section('contenido')
    <h2 class="text-xl font-bold">Notificaciones</h2>
  
   <div class="flex flex-col gap-5"> 
        @forelse ($notificaciones as $notificacion)
            <div class="p-5 flex flex-row gap-5 border-l-8 border-green-600 border text-xs flex justify-between items-center">
                @foreach ($notificacion->data as $informacion)
                    <p class="font-bold">{{ $informacion }}</p>
                @endforeach
            </div>
        @empty
    </div>
        <p class="text-gray-600 text-center">No hay notificaciones Nuevas</p>
    @endforelse
@endsection