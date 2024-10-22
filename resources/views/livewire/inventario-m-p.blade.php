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
                    <th class="encabezado">Acciones</th>
                </tr>
            </thead>
            <tbody class="table-body">
                @foreach ($materiasPrimas as $mp)
                <tr>
                    <td class="registro">{{ $mp->nombre }}</td>
                    <td class="registro">{{ $mp->unidad_medida }}</td>
                    <td class="registro">{{ $mp->cantidad_disponible }}</td>
                    <td class="registro">{{ $mp->precio_por_unidad }}</td>
                    <td class="registro">{{ $mp->proveedor->nombre }}</td>
                    <td class="registro flex flex-row gap-5">
                        <a href="{{ route('inventarioMP.edit',$mp) }}">
                            <i class="fa-solid fa-pen-to-square text-2xl hover:text-gray-600"></i>
                        </a>
                        <button>
                            <i class="fa-solid fa-trash text-2xl hover:text-gray-600"></i>
                        </button>
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

