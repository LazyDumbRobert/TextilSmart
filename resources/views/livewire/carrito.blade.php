<div>
    @if ($items->count() > 0)
        <h2 class="text-4xl font-bold uppercase">CARRITO</h2>
        <div class="flex flex-row justify-center items-center">
            <div class="grid grid-cols-2 gap-5">
                @foreach ($items as $row)
                    <div class=" shadow-xl p-5">
                        <div class="flex flex-row flex-wrap justify-center items-center">
                            <div class="font-bold text-sm">
                                <p>Producto: {{ $row->name }}</p>
                                <p>Cantidad: {{ $row->quantity }}</p>
                                <p>Total: Q{{ $row->price }}</p>
                            </div>
                            <img src="{{ asset('storage/img/'. $row->attributes['image']) }}" alt="{{ $row->name }} Img" class="w-24 p-5"></img>
                        </div>

                        <div class="flex flex-row gap-5">
                            <button wire:click="eliminar({{$row->id}})" class="text-xs flex flex-row items-center justify-center gap-2 btn bg-red-500">
                                <i class="fa-solid fa-circle-xmark"></i>
                                <p>Eliminar</p>
                            </button>

                            <div class="flex flex-row gap-1">
                                <button wire:click="restarUno({{ $row->id }})" class="text-xs flex flex-row items-center justify-center gap-2 btn bg-indigo-500 hover:bg-indigo-800">
                                    <i class="fa-solid fa-minus"></i>
            
                                </button>
                                <p class="font-bold">{{ $row->quantity }}</p>

                                <button wire:click="agregarUno({{ $row->id }})" class="text-xs flex flex-row items-center justify-center gap-2 btn bg-indigo-500 hover:bg-indigo-800">
                                    <i class="fa-solid fa-plus"></i>
            
                                </button>
                            </div>
                        </div>
                    
                    </div>
                @endforeach
            </div>
            <div class="p-10">
                <h2 class="font-bold uppercase">Resumen</h2>
                <div>
                    <p>Subtotal: {{$total}}</p>
                    <p>Impuestos: 0</p>
                    <p>Envio: Q{{ $envio }}</p>
                    <br>
                    <p>Total a pagar: Q{{ $total + $envio }}</p>
                </div>
                <div class="btn bg-indigo-500 hover:bg-indigo-700 mt-10 w-full text-center">
                    <a href="{{ route('carrito.FinalizarPedido') }}" >
                        Finalizar Compra
                    </a>
                </div>
            </div>
        </div>
    @else
        <div class="flex flex-col justify-center items-center gap-5">
            <p class="text-center text-4xl">Explora nuestros productos</p>
            <a href="{{ route('productos') }}" class="btn bg-indigo-600 bg-indigo-800">
                Ver productos
            </a>
        </div>
    @endif
</div>
