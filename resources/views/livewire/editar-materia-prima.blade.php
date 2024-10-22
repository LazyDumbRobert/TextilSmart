<div>
    <form wire:submit.prevent="save" class="flex flex-col gap-10">
        <div class="flex flex-col gap-2">
            <label for="" class="uppercase font-bold">Nombre del producto de Materia Prima: </label>
            <input class="w-full" type="text" value="{{ $materiaprima->nombre }}" placeholder="Nombre del producto">
        </div>

        <div class="flex flex-col gap-2">
            <label for="" class="uppercase font-bold">Unidad de Medida: </label>
            <input class="w-full" type="text" value="{{ $materiaprima->unidad_medida }}" placeholder="Unidad de Medida">
        </div>

        <div class="flex flex-col gap-2">
            <label for="" class="uppercase font-bold">Cantidad Disponible: </label>
            <input class="w-full" type="number" value="{{ $materiaprima->cantidad_disponible }}" placeholder="Cantidad Disponible">
        </div>

        <div class="flex flex-col gap-2">
            <label for="" class="uppercase font-bold">Precio por Unidad: </label>
            <input class="w-full" type="number" value="{{ $materiaprima->precio_por_unidad }}" placeholder="Precio por Unidad">
        </div>

        <div class="flex flex-col gap-2">
            <label for="" class="uppercase font-bold">Descripción: </label>
            <textarea name="" id="" cols="30" rows="10">
                {{ $materiaprima->descripcion }}
            </textarea>
        </div>

        <div class="flex flex-col gap-2">
            <label for="" class="uppercase font-bold">Proveedor: </label>
            <select name="" id="">
                @foreach ($proveedores as $proveedor)
                    <option {{ ($proveedor->id == $materiaprima->proveedor_id) ? 'selected' : '' }} value="{{ $proveedor->id }}">{{ $proveedor->nombre }}</option>
                @endforeach
            </select>
        </div>

        <input type="submit" class="btn bg-indigo-500 hover:bg-indigo-800 cursor-pointer" value="Guardar">
    </form>
</div>
