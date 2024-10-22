<div>
    <form class="flex flex-col gap-10">
        <div class="flex flex-col gap-2">
            <label for="" class="uppercase font-bold">Nombre del producto: </label>
            <input class="w-full" type="text" value="{{ $producto->nombre }}" placeholder="Nombre del producto">
        </div>

        <div class="flex flex-col gap-2">
            <label for="" class="uppercase font-bold">Tipo del Producto: </label>
            <input class="w-full" type="text" value="{{ $producto->tipo }}" placeholder="Nombre del producto">
        </div>

        <div class="flex flex-col gap-2">
            <label for="" class="uppercase font-bold">Precio del Producto (unitario): </label>
            <input class="w-full" type="number" value="{{ $producto->precio }}">
        </div>

    </form>
</div>
