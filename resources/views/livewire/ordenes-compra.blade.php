<div>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th class="encabezado">No. OC</th>
                    <th class="encabezado">Fecha de Creación</th>
                    <th class="encabezado">Estado</th>
                    <th class="encabezado">Ver</th>
                </tr>
            </thead>
            <tbody class="table-body">
                @foreach ($ocs as $oc)
                    @php
                        $colorClases = ($oc->estado_id == 1) ? 'bg-orange-500' : (($oc->estado_id==2) ? 'bg-yellow-500' : 'bg-green-500')
                    @endphp
                    <tr>
                        <td class="registro">{{ $oc->id }}</td>
                        <td class="registro">{{ $oc->created_at->format('d-m-Y h:i:s') }}</td>
                        <td class="registro"><span class=" {{ $colorClases }} p-2 text-white uppercase font-bold rounded-xl">{{ $oc->estado->estado }}</span></td>
                        <td class="registro">
                            <a href="#" class=" p-2 text-white uppercase font-bold rounded-xl bg-green-500 hover:bg-green-600">
                                Ver OC
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{-- <div class="mt-4">
        {{ $materiasPrimas->links() }} 
    </div> --}}
</div>

