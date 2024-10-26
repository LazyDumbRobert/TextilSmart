<div>
    @error('estado')
        <x-alerta-error :message="$message" />
    @enderror
    
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
          
        <div class="flex justify-end">
            <a href="{{ route('produccion.create') }}" class="btn bg-indigo-600 hover:bg-indigo-800">
                <i class="fa-solid fa-plus"></i>
                Crear Orden de Produccion
            </a>
        </div>  
    </form>
    
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th class="encabezado">No. OP</th>
                    <th class="encabezado">Producto</th>
                    <th class="encabezado">Fecha de Ejecución</th>
                    <th class="encabezado">Estado</th>
                    <th class="encabezado">Ver</th>
                </tr>
            </thead>
            <tbody class="table-body">
                @foreach ($ordenesP as $orden)
                    <tr>
                        <td class="registro">{{ $orden->id }}</td>
                        <td class="registro">{{ $orden->producto->nombre }}</td>
                        <td class="registro">{{ $orden->fecha_ejecucion->format('d-m-Y') }}</td>
                        <td class="registro">{{ $orden->estado->estado }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="mt-4">
        {{ $ordenesP->links() }} 
    </div>
</div>

