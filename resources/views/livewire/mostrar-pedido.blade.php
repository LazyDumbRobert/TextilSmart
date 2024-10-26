<div class="mt-10 flex flex-col gap-10">
    <div class="p-5 shadow-xl rounded bg-indigo-700 text-white rounded">
        <h2 class="font-bold text-4xl">Información del pedido</h2>
        <div class="p-5">
            <p><span class="font-bold">Nombre del que recibe:</span> {{ $pedido->usuario->name }}</p>
            <p><span class="font-bold">Dirección de entrega:</span> {{ $pedido->direccion_entrega }}</p>
            <p><span class="font-bold">Subtotal:</span> Q{{ $pedido->monto_total }}</p>
            <p><span class="font-bold">Costo de envío:</span> Q{{ $pedido->costo_envio }}</p>
            <p><span class="font-bold">Total: </span>Q{{ $pedido->costo_envio + $pedido->monto_total }}</p>
        </div>
    </div>

    <div>
        <h2 class="font-bold text-4xl">Detalle del pedido</h2>
        <div class="p-5">
            @foreach ($pedido->productos as $linea)
                <div class="flex flex-row shadow-xl p-5 justify-between">
                    <div>
                        <p><span class="font-bold">Codigo de Producto:</span> {{ $linea->producto->id }} </p>
                        <p><span class="font-bold">Producto:</span> {{ $linea->producto->nombre }} </p>
                        <p><span class="font-bold">Cantidad Ordenada:</span> {{ $linea->cantidad }} </p>
                        <p><span class="font-bold">Precio por Unidad: </span>{{ $linea->producto->precio_unitario }} </p>
                    </div>
                    <img src="{{ asset('storage/img/'.$linea->producto->imagen) }}" alt="{{ $linea->producto->nombre }} Img" class="w-24">
                </div>
            @endforeach
        </div>
    </div>

    @role('client')
        <livewire:rastreo-pedido :pedido="$pedido"/>
    @endrole

    @if ($pedido->estado_id == 1)
        @role('admin')
            <button wire:click="confirmarPedido()" class="btn bg-indigo-600 hover:bg-indigo-800">
                ¡Orden Enviada!
            </button> 
        @endrole
    @elseif( $pedido->estado_id == 2)
            @role('admin')
                <button wire:click="entregarPedido()" class="btn bg-indigo-600 hover:bg-indigo-800">
                    ¡El pedido fue entregado!
                </button>
            @endrole
    @endif
</div>
