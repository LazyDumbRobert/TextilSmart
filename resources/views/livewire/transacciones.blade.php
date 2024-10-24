<div class="flex flex-col gap-5">
    <div class="flex flex-col gap-5 mt-5 shadow-xl p-5">
        <h2 class="text-2xl font-bold uppercase">Ingresos</h2>
        @forelse ($materiaprima->ocs as $ordencompra)
            @if ($ordencompra->estado_id == 3)
                <div class="p-5 flex flex-row gap-5 border-l-8 border-green-600 border text-xs flex justify-between items-center">
                    <p>Proveedor: {{ $ordencompra->proveedor->nombre }}</p>
                    <p>Cantidad Anterior: {{ $ordencompra->cantidad_disponible_anterior }} {{ $materiaprima->unidad_medida }}</p>
                    <p>Fecha de Ingreso: {{ $ordencompra->updated_at->format('d-m-Y h:i:s') }}</p>
                    <p class="bg-green-600 p-1 text-white font-bold rounded">+{{ $ordencompra->cantidad }} {{ $materiaprima->unidad_medida }}</p>
                </div>
            @endif
        @empty
            <p class="text-center text-gray-500">Aún no se encuentran transacciones de ingreso de esta materia prima</p>
        @endforelse
    </div>
</div>
