<div>
        <div>
            <h2 class="text-4xl font-bold">Rastreo de Pedido</h2>
        </div>
        <div class="w-full flex justify-between text-sm text-gray-700 mt-5">
            <span class="uppercase bg-indigo-600 p-2 text-white font-bold rounded">Registrado</span>
            <span class="uppercase bg-indigo-600 p-2 text-white font-bold rounded">Enviado</span>
            <span class="uppercase bg-indigo-600 p-2 text-white font-bold rounded">Entregado</span>
        </div>
        <div class="w-full bg-gray-300 rounded-full h-4 mt-4">
            <div class="bg-blue-500 h-4 rounded-full" style="width: {{ $progress }}%;"></div>
        </div>
    

    @if ($progress == 0)
        <div class="flex flex-row mt-5 justify-center items-center gap-2 uppercase font-bold">
            <i class="fa-solid fa-truck text-orange-500"></i>
            <p>Su paquete será enviado lo antes posible</p>
        </div>
    @elseif ($progress == 50)
        <div class="flex flex-row mt-5 justify-center items-center gap-2 uppercase font-bold">
            <i class="fa-solid fa-truck text-orange-500"></i>
            <p>El paquete esta en camino</p>
        </div>
    @else
        <div class="flex flex-row mt-5 justify-center items-center gap-2 uppercase font-bold">
            <i class="fa-solid fa-circle-check text-green-500"></i>
            <p>El paquete fue recibido correctamente!</p>
        </div>
    @endif
    

</div>
