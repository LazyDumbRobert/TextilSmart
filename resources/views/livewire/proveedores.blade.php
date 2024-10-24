<div>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th class="encabezado">Nombre</th>
                    <th class="encabezado">NIT</th>
                    <th class="encabezado">Dirección</th>
                    <th class="encabezado">telefono</th>
                    <th class="encabezado">Email</th>
                    <th class="encabezado">Activo</th>
                </tr>
            </thead>
            <tbody class="table-body">
                @foreach ($proveedores as $proveedor)
                <tr>
                    <td class="registro">{{ $proveedor->nombre }}</td>
                    <td class="registro">{{ $proveedor->nit }}</td>
                    <td class="registro">{{ $proveedor->direccion }}</td>
                    <td class="registro">{{ $proveedor->telefono }}</td>
                    <td class="registro">{{ $proveedor->email }}</td>
                 
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="mt-4">
        {{ $proveedores->links() }} 
    </div>
</div>

