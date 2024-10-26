    <div class="mt-10">
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
    </div>

