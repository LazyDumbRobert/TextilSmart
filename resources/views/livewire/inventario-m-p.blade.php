<div>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th class="encabezado">Nombre</th>
                    <th class="encabezado">Unidad de Medida</th>
                    <th class="encabezado">Stock</th>
                    <th class="encabezado">Precio por Unidad</th>
                    <th class="encabezado">Proveedor</th>
                    <th class="encabezado">Transacciones</th>
                </tr>
            </thead>
            <tbody class="table-body">
                @foreach ($materiasPrimas as $materiaprima)
                <tr>
                    <td class="registro">{{ $materiaprima->nombre }}</td>
                    <td class="registro">{{ $materiaprima->unidad_medida }}</td>
                    <td class="registro">{{ $materiaprima->cantidad_disponible }}</td>
                    <td class="registro">{{ $materiaprima->precio_por_unidad }}</td>
                    <td class="registro">{{ $materiaprima->proveedor->nombre }}</td>
                    <td class="registro flex flex-row gap-5 ">
                        <a href="{{ route('inventarioMP.transacciones',$materiaprima) }}">
                            <i class="fa-solid fa-eye text-xl hover:text-gray-600"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="mt-4">
        {{ $materiasPrimas->links() }} 
    </div>
</div>

