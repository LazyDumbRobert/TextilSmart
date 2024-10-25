<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />
    <title>TextilSmart - Orden de Compra - {{ $ordencompra->id }}</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body class="flex flex-row justify-between h-screen">

    <div class="p-10  w-full">
        <header class="flex flex-row justify-between">
            <div>
                <x-logo />
                <h1 class="font-bold text-5xl">Orden de Compra</h1>
            </div>
            <div class="text-xl">
                <p>TextilSmart SA.</p>
                <p>Chimaltenango, Guatemala.</p>
                <p>111-2222-3333</p>
            </div>
        </header>

        <div class="flex w-full flex-row justify-between mt-10 text-2xl">
            <p>Orden de compra #: {{ $ordencompra->id }}</p>
            <p>Fecha: {{ $ordencompra->created_at->format('d-m-Y') }}</p>
        </div>

        <div class="flex flex-col mt-10 w-full justify-around text-2xl border border-black">
            <div class="grid grid-cols-2 w-full bg-black text-white p-3 font-bold uppercase">
                <h2>Proveedor</h2>
                <h2>Enviar a</h2>
            </div>

            <div class="grid grid-cols-2 w-full p-2">
                <div>
                    <p>{{ $ordencompra->proveedor->nombre }}</p>
                    <p>Direccion: {{ $ordencompra->proveedor->direccion }}</p>
                    <p>Telefono: {{ $ordencompra->proveedor->telefono }}</p>
                    <p>NIT: {{ $ordencompra->proveedor->nit }}</p>
                </div>

                <div>
                    <p>TextilSmart SA.</p>
                    <p>El Tejar, Chimaltenango,</p>
                    <p>Guatemala</p>
                    <p>1111-2222-3333</p>
                </div>
            </div>
        </div>

        <div class="mt-10">
            <h2 class="text-3xl bg-black text-white font-bold p-2">PRODUCTOS O SERVICIOS</h2>
        </div>

        <div class="mt-10 h-96 border border-black">
            <table class="table">
                <thea class="p-2 ">
                    <tr class="uppercase text-xl">
                        <th>Descripción</th>
                        <th>Precio por Unidad</th>
                        <th>Cantidad</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody class="table-body mt-5">
                   <tr class="text-xl text-center border-y border-black">
                        <td>Compra de producto: {{ $ordencompra->materiaPrima->nombre }}</td>
                        <td>{{ $ordencompra->materiaPrima->precio_por_unidad }} / {{ $ordencompra->materiaPrima->unidad_medida }}</td>
                        <td>{{ $ordencompra->cantidad}}</td>
                        <td>Q{{ $ordencompra->cantidad * $ordencompra->materiaPrima->precio_por_unidad }}</td>
                   </tr>
                </tbody>
            </table>

            
        </div>
        <div class="w-full bg-black text-white font-bold p-5 uppercase flex justify-between">
            <p>Total: </p>
            <p>Q{{ $ordencompra->cantidad * $ordencompra->materiaPrima->precio_por_unidad }}</p>
        </div>
       

    </div>


</body>
</html>
