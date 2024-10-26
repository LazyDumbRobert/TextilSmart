<div class="grid grid-cols-2 p-5 w-1/2 mx-auto">
    <div>
        <img src="{{ asset('storage/img/' . $producto->imagen) }}" alt="{{ $producto->nombre }} Img" class="w-64 p-5">
    </div>
    <div class="flex flex-col justify-center items-center">
        <p class="uppercase font-bold">{{ $producto->nombre }}</p>
        <p class="uppercase font-bold text-3xl">${{ $producto->precio_unitario }}</p>
        <div class="mt-10">
            @auth
                @if (!$flag)
                        <button wire:click="$dispatch('agregar')" class="bg-indigo-600 rounded p-2 text-white font-bold">
                            <i class="fa-solid fa-plus"></i>
                            Agregar al carrito
                        </button> 
                @else
                    <button wire:click="$dispatch('eliminar')" class="bg-red-600 rounded p-2 text-white font-bold">
                        <i class="fa-solid fa-circle-xmark"></i>
                        Eliminar del Carrito
                    </button>
                @endif
                
            @endauth
        </div>
    </div>
</div>

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        Livewire.on('agregar',() => {
            Livewire.dispatch('agrgarProducto');
            
        })

        Livewire.on('eliminar',() => {
            Livewire.dispatch('eliminarProducto');
        })


</script>
@endpush