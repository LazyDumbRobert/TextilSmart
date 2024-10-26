<div class="mt-10 grid grid-cols-3">
    <div class="col-span-2">
        @error('error')
            <x-alerta-error :message="$message" />
        @enderror
        <form wire:submit.prevent="save" class="flex flex-col gap-5 mt-5">
            <div class="flex flex-col">
                <label class="font-bold uppercase" for="">Seleccione un producto: </label>
                <select wire:model="producto_id">
                    <option selected value>--SELECCION UNA OPCIÓN--</option>
                    @foreach ($productos as $producto)
                        <option value="{{ $producto->id }}">{{ $producto->nombre }}</option>
                    @endforeach
                </select>
                @error('producto_id')
                    <x-alerta-error :message="$message" />
                @enderror
            </div>

            <div class="flex flex-col">
                <label class="font-bold uppercase" for="">Fecha de ejecución: </label>
                <input wire:model="fecha_ejecucion" type="date" min="{{ now()->format('Y-m-d') }}">
                @error('fecha_ejecucion')
                    <x-alerta-error :message="$message" />
                @enderror
            </div>

            <input type="submit" value="Crear" class="btn bg-indigo-600 hover:bg-indigo-800 cursor-pointer">
        </form>
    </div>

        <div class="p-5">
            <livewire:seleccion-materia-prima />    
        </div>
</div>
