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
    </form>
    
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th class="encabezado">No. OC</th>
                    <th class="encabezado">Fecha de Creación</th>
                    <th class="encabezado">Estado</th>
                    <th class="encabezado">Ver</th>
                </tr>
            </thead>
            <tbody class="table-body">
                @foreach ($ocs as $oc)
                    @php
                        $colorClases = ($oc->estado_id == 1) ? 'bg-orange-500' : (($oc->estado_id==2) ? 'bg-yellow-500' : (($oc->estado_id==3) ? 'bg-green-500' : 'bg-red-500'))
                    @endphp
                    <tr>
                        <td class="registro">{{ $oc->id }}</td>
                        <td class="registro">{{ $oc->created_at->format('d-m-Y h:i:s') }}</td>
                        <td class="registro"><span class=" {{ $colorClases }} p-2 text-white uppercase font-bold rounded-xl">{{ $oc->estado->estado }}</span></td>
                        <td class="registro">
                            <a href="{{ route('oc.show',$oc) }}" class=" p-2 text-white uppercase font-bold rounded-xl bg-green-500 hover:bg-green-600">
                                Ver OC
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="mt-4">
        {{ $ocs->links() }} 
    </div>
</div>

