<div class="w-1/2 mt-10">
    <form wire:submit.prevent="save" class="flex flex-col gap-5">
            @error('error')
                <x-alerta-error :message="$message" />
            @enderror
        <div class="flex flex-col">
            <label class="font-bold uppercase" for="">Nombre: </label>
            <input disabled  type="text" placeholder="El nombre de la persona que recibe" value="{{ auth()->user()->name }}">
        </div>

        <div class="flex flex-col">
            <label class="font-bold uppercase" for="">Email: </label>
            <input disabled type="text" placeholder="Email de la persona que recibe" value="{{ auth()->user()->email }}">
        </div>

        <div class="flex flex-col">
            <label class="font-bold uppercase" for="">Metodo de pago: </label>
            <select disabled name="" id="">
                <option selected value="">Pago Contra Entrega</option>
            </select>
        </div>

        <div class="flex flex-col">
            <label class="font-bold uppercase" for="">Dirección exacta de entrega del Pedido: </label>
            <input wire:model="direccion"  type="text" placeholder="Dirección de entrega">
            @error('direccion')
                <x-alerta-error :message="$message" />
            @enderror
        </div>

        <button type="submit" class="btn bg-indigo-600 hover:bg-indigo-800">
            <p>Ordenar</p>
        </button>
    </form>
</div>

