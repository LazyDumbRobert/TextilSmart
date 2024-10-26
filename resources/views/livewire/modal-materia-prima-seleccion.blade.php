<div>  
    <div class="fixed inset-0 flex items-center justify-center bg-gray-500 bg-opacity-50">
        <div class="w-2/3 flex flex-col gap-5 bg-white p-10 rounded shadow-xl">
            <div class="flex flex-row justify-between p-5">
                <p class="text-xl uppercase"><span class="font-bold">Materia Prima:</span> {{ $modelo->nombre }}</p>
                <p class="text-xl uppercase"><span class="font-bold">Cantidad disponible:</span> {{ $modelo->cantidad_disponible }} {{ $modelo->unidad_medida }}</p>
            </div>
            <form wire:submit.prevent="guardar" class="flex flex-col gap-5">
                @error('error')
                    <x-alerta-error :message="$message" /> 
                @enderror
                <div class="flex flex-col">
                    <label class="font-bold uppercase" for="">Cantidad a Utilizar: </label>
                    <input  wire:model.lazy="cantidad" placeholder="Cantidad que se utilizará para producción(kg): ">
                </div>
                @error('cantidad')
                    <x-alerta-error :message="$message" /> 
                @enderror
                <input type="submit" value="Tomar" class="btn bg-indigo-600 hover:bg-indigo-800 cursor-pointer">
            </form>
        </div>
    </div>
</div>