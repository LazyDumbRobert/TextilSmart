<div>
    <h2 class="text-3xl font-bold ">Materia Prima</h2>
    <div class="flex flex-col gap-5 mt-5 overflow-y-auto h-96">
        @foreach ($materiasprimas as $mp)
            <div wire:click="openModal({{ $mp->id }})" class="{{ in_array($mp->id, $materias_id) ? 'bg-indigo-800' : 'bg-indigo-600 hover:bg-indigo-800' }} flex justify-between p-2 text-white font-bold rounded cursor-pointer">
                <p>{{ $mp->nombre }}</p>
                <p>{{ $mp->cantidad_disponible }} {{ $mp->unidad_medida }}</p>
            </div>
        @endforeach
    </div>

    @if ($open)
        <livewire:modal-materia-prima-seleccion :modelo="$modelo" />
    @endif
</div>
