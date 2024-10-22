<div>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th class="encabezado">Producto</th>
                    <th class="encabezado">Tipo</th>
                    <th class="encabezado">Precio</th>
                    <th class="encabezado">Stock</th>
                    <th class="encabezado">Activo</th>
                    <th class="encabezado">Acciones</th>
                </tr>
            </thead>
            <tbody class="table-body">
                @foreach ($productos as $producto)
                <tr>
                    <td class="registro">{{ $producto->nombre }}</td>
                    <td class="registro">{{ $producto->tipo }}</td>
                    <td class="registro">{{ $producto->precio }}</td>
                    <td class="registro">{{ $producto->stock }}</td>
                    <td class="registro">
                        <button wire:click="cambiarEstado({{ $producto->id }})" class="{{ ($producto->activo) ? 'bg-green-500' : 'bg-red-500'}} btn text-center">
                            <i class="fa-solid fa-circle-check"></i>
                            {{ ($producto->activo == 1) ? 'ACTIVO' : 'NO ACTIVO'}}
                        </button>
                    </td>
                    <td class="registro flex flex-row gap-5">
                        <a href="{{ route('inventario.producto.edit',$producto) }}">
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
        {{ $productos->links() }} 
    </div>
</div>

