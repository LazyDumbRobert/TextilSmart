<div class="flex flex-col gap-10 mt-5">
    <div class="shadow-xl p-5">
        <h2 class="font-bold text-4xl">Información de la Orden de Producción</h2>

        <div class="mt-5 text-xl">
            <p><span class="font-bold">Fecha de cración: </span>{{ $ordenproduccion->created_at->format('d-m-Y') }}</p>
            <p><span class="font-bold">Fecha Planificada de Ejecución: </span>{{ $ordenproduccion->fecha_ejecucion->format('d-m-Y') }}</p>
            <p><span class="font-bold">Fecha de Ejecución: </span>{{ $ordenproduccion->fecha_inicio->format('d-m-Y') }}</p>
            <p><span class="font-bold">Producto: </span>{{ $ordenproduccion->producto->nombre }}</p>
        </div>
    </div>

    <div>
        <form wire:submit.prevent="registrar" novalidate>
            <div class="flex flex-col">
                <label class="font-bold uppercase" for="">Cantidad producidas del producto({{ $ordenproduccion->producto->nombre }}): </label>
                <input wire:model="cantidad_producida" type="number" placeholder="Cantidad producida del articulo">
                @error('cantidad_producida')
                    <x-alerta-error :message="$message" />
                @enderror
            </div>

            <input type="submit" class="btn bg-indigo-600 hover:bg-indigo-800 mt-10 w-full" value="Registrar Articulos">
        </form>
    </div>
</div>
