<div class="mt-10 flex flex-col gap-5">
    <div class="shadow-xl p-10">
        <h2 class="font-bold text-4xl">Informaciónde la Orden de Producción</h2>

        <div class="text-xl">
            <p><span class="font-bold">Fecha de ejecución: </span>{{$ordenproduccion->fecha_ejecucion->format('d-m-Y')}}</p>
            <p><span class="font-bold">Producto:</span> {{$ordenproduccion->producto->nombre }}</p>
            <p><span class="font-bold">Fecha de creación:</span class="font-bold"> {{$ordenproduccion->created_at }}</p>
            <p><span class="font-bold">Fecha de Inicio:</span class="font-bold"> {{$ordenproduccion->fecha_inicio->format('d-m-Y h:i:s A') }}</p>
            <p><span class="font-bold">Fecha de Finalización: </span class="font-bold"> {{$ordenproduccion->fecha_final->format('d-m-Y h:i:s A') }}</p>
            <p><span class="font-bold">Cantidad Producida de Articulo:</span class="font-bold"> {{$ordenproduccion->cantidad_producido }} Unidades</p>
        </div>
    </div>

    <div>
        <h2 class="font-bold text-4xl">Detalle de la Orden De Producción: </h2>

        @foreach ($ordenproduccion->materiasPrimas as $orden)
            @if ($ordenproduccion->estado_id == 1)
                    <div class="flex flex-row shadow-xl p-5 justify-between">
                        <div>
                            <p><span class="font-bold">Codigo de Producto:</span> {{ $orden->materiaPrima->nombre }} </p>
                            <p><span class="font-bold">Cantidad a utilizar:</span> {{ $orden->cantidad_utilizada }} {{ $orden->materiaPrima->unidad_medida }}</p>
                            <p><span class="font-bold">Precio por Unidad: </span>Q{{ $orden->materiaPrima->precio_por_unidad }} </p>
                        </div>
                    </div>
            @else
                <div class="flex flex-row shadow-xl p-5 justify-between">
                    <div>
                        <p><span class="font-bold">Codigo de Producto:</span> {{ $orden->materiaPrima->nombre }} </p>
                        <p><span class="font-bold">Cantidad a Utiizada:</span> {{ $orden->cantidad_utilizada }} {{ $orden->materiaPrima->unidad_medida }}</p>
                    </div>
                </div>
            @endif
      
            @endforeach
        </div>
    </div>
    
    @if ($ordenproduccion->estado_id == 1)
        <button wire:click="actualizar()" class="btn bg-indigo-600 hover:bg-indigo-800">
            ¡En produccion!
        </button>
    @endif
    
</div>
