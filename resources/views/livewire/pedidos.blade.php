    <div class="mt-10">
        <form wire:submit.prevent="mostrarDatos" class="flex flex-row justify-end items-center gap-2 mb-5 mt-5">
        
            <div class="flex justify-end items-center gap-5">
                <select wire:model="estado" id="">
                    @foreach ($estados as $estado)
                        <option value="{{ $estado->id }}">{{ $estado->estado }}s</option>
                    @endforeach
                        <option value="10">Todas</option>
                </select>
               
            </div>
            <button type="submit">
                <i class="fa-solid fa-magnifying-glass text-2xl hover:bg-gray-200 p-2 rounded-xl"></i>
            </button>
        </form>
        <table class="table">
            <thead>
                <tr>
                    <th class="encabezado">No. Pedido</th>
                    <th class="encabezado">Fecha de Pedido</th>
                    <th class="encabezado">Número de piezas</th>
                    <th class="encabezado">Dirección</th>
                    <th class="encabezado">Estado</th>
                    <th class="encabezado">Ver</th>
                </tr>
            </thead>
            <tbody class="table-body">
                @foreach ($pedidos as $pedido)
                    <tr>
                        <td class="registro">{{ $pedido->id }}</td>
                        <td class="registro">{{ $pedido->fecha_pedido->format('d-m-Y h:i:s') }}</td>
                        <td class="registro">{{ $pedido->productos->count() }}</td>
                        <td class="registro">{{ $pedido->direccion_entrega }}</td>
                        <td class="registro">{{ $pedido->estado->estado }}</td>
                        <td class="registro">
                            <a href="{{ route('pedidos.show',$pedido) }}">
                                <i class="fa-solid fa-eye text-xl hover:text-gray-600 cursor-pointer"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="mt-4">
            {{ $pedidos->links() }} 
        </div>
    </div>

