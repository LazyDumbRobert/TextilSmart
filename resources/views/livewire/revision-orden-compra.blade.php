<div>
    <div class="mt-10 shadow-xl p-5 text-xl">

        <h2 class="text-3xl font-bold mb-5">Información de la Orden de Compra</h2>
        <p><span class="font-bold">Cantidad a comprar:</span> {{ $ordencompra->cantidad }}  {{ $ordencompra->materiaPrima->unidad_medida }}</p>
        <p><span class="font-bold">Precio:</span> Q{{ $ordencompra->materiaPrima->precio_por_unidad }}</p>
        <p><span class="font-bold">Monto Total:</span> Q{{ $ordencompra->materiaPrima->precio_por_unidad  *  $ordencompra->cantidad}} </p>
        <p><span class="font-bold">Estado:</span> {{ $ordencompra->estado->estado}} </p>

        @if ($ordencompra->estado_id==2)
            <p>
                <i class="fa-solid fa-circle-check text-green-600"></i>
                <span class="font-bold">Aprobada en fecha:</span> 
                {{ $ordencompra->updated_at->format('d-m-Y h:i:s') }}
            </p>
        @endif

        @if ($ordencompra->estado_id==4)
            <p>
                <i class="fa-solid fa-circle-xmark text-red-500"></i>
                <span class="font-bold">Rechazada en fecha:</span> 
                {{ $ordencompra->updated_at->format('d-m-Y h:i:s') }}
            </p>
        @endif
    </div>

    <div class="mt-10 shadow-xl p-5 text-xl">
        <h2 class="text-3xl font-bold mb-5">Información del Producto</h2>
        <p><span class="font-bold">Producto:</span> {{ $ordencompra->materiaPrima->nombre }}</p>
        <p><span class="font-bold">Cantidad en invetario:</span> {{ $ordencompra->materiaPrima->cantidad_disponible }} {{ $ordencompra->materiaPrima->unidad_medida }}</p>
    </div>

    <div class="mt-10 shadow-xl p-5 text-xl">
        <h2 class="text-3xl font-bold mb-5">Información del Proveedor</h2>
        <p><span class="font-bold">Proveedor:</span> {{ $ordencompra->proveedor->nombre }}</p>
        <p><span class="font-bold">Telefono:</span> {{ $ordencompra->proveedor->telefono }}</p>
        <p><span class="font-bold">Email:</span> {{ $ordencompra->proveedor->email }} </p>
    </div>

    @if ($ordencompra->estado_id === 1)
        <div class="flex flex-col mt-5">
            @error('error')
                <x-alerta-error :message="$message" />
            @enderror

            <div class="flex flex-row justify-between mt-5 gap-5 ">
                <button wire:click="aprobar()" class="bg-green-500 hover:bg-green-600 text-white p-5 rounded-xl w-full uppercase font-bold text-xl">
                    <i class="fa-solid fa-circle-check"></i>
                    Aprobar
                </button>

                <button wire:click="rechazar()" class="bg-red-500 hover:bg-red-600 text-white p-5 rounded-xl w-full uppercase font-bold text-xl">
                    <i class="fa-solid fa-circle-xmark"></i>
                    Rechazar
                </button>
            </div>

        </div> 
    @endif

    @if ($ordencompra->estado_id === 2)
        <div class="flex flex-col mt-5">
            @error('error')
                <x-alerta-error :message="$message" />
            @enderror

            <div class="flex flex-row justify-between mt-5 gap-5 ">
                <button wire:click="recibido()" class="bg-green-500 hover:bg-green-600 text-white p-5 rounded-xl w-full uppercase font-bold text-xl">
                    <i class="fa-solid fa-circle-check"></i>
                    Recibido
                </button>
            </div>

        </div> 
    @endif
    
</div>
