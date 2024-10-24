<div>
    <form wire:submit.prevent="create" class="flex flex-col gap-5">
        <div class="flex flex-col  gap-5">
            <label class="font-bold uppercase" for="">Proveedor: </label>
            <select wire:model="proveedor_id">
                @foreach ($proveedores as $proveedor)
                    <option value="{{ $proveedor->id }}">{{ $proveedor->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="flex flex-col  gap-5">
            <label class="font-bold uppercase" for="">Materia Prima: </label>
            <select wire:model="mp_id">
                @foreach ($materiasPrimas as $mp)
                    <option value="{{ $mp->id }}">{{ $mp->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="flex flex-col">
            <label class="font-bold uppercase" for="">Cantidad requerida: </label>
            <input wire:model="cantidad" type="number" placeholder="Cantidad requerida del producto">
            @error('cantidad')
                <x-alerta-error :message="$message" />
            @enderror
        </div>

        <input type="submit" value="Crear" class="btn bg-indigo-600 hover:bg-indigo-800 cursor-pointer">
    </form>
</div>
