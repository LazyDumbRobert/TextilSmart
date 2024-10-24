<div>
    <form wire:submit.prevent="save" class="flex flex-col gap-5">
        <div class="flex flex-col">
            <label class="font-bold uppercase" for="">Nombre del proveedor: </label>
            <input wire:model="nombre" type="text" placeholder="Nombre del proveedor">
            @error('nombre')
                <x-alerta-error :message="$message" />
            @enderror
        </div>

        <div class="flex flex-col">
            <label class="font-bold uppercase" for="">NIT del proveedor: </label>
            <input wire:model="nit" type="text" placeholder="NIT del proveedor">
            @error('nit')
                <x-alerta-error :message="$message" />
        @enderror
        </div>

        <div class="flex flex-col">
            <label class="font-bold uppercase" for="">Dirección del proveedor: </label>
            <input wire:model="direccion" type="text" placeholder="Dirección del proveedor">
            @error('direccion')
                <x-alerta-error :message="$message" />
            @enderror
        </div>

        <div class="flex flex-col">
            <label class="font-bold uppercase" for="">Telefono del Proveedor: </label>
            <input wire:model="telefono" type="text" placeholder="Telefono del proveedor">
            @error('telefono')
                <x-alerta-error :message="$message" />
            @enderror
        </div>

        <div class="flex flex-col">
            <label class="font-bold uppercase" for="">Email del Proveedor: </label>
            <input wire:model="email" type="text" placeholder="Email del proveedor">

            @error('email')
                <x-alerta-error :message="$message" />
            @enderror
        </div>

        <input type="submit" value="Crear" class="btn bg-indigo-600 hover:bg-indigo-800 cursor-pointer">
    </form>
</div>
