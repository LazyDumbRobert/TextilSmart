<div {{ $attributes->merge(['class' => 'grid']) }}>
    @foreach ($productos as $producto)
        <div class="flex flex-col shadow-2xl p-5 justify-center items-center" data-aos="zoom-in-down">
            <div>
                <img src="{{ asset('storage/img/' . $producto->imagen) }}" alt="{{ $producto->nombre }} Img" class="w-64 p-5">
            </div>
            <div class="flex flex-row justify-center items-center">
                <p class="uppercase font-bold">{{ $producto->nombre }}</p>
            </div>
        </div>
    @endforeach
</div>