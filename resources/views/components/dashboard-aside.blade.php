<aside>
    <div class="bg-indigo-500 h-screen p-5 flex flex-col">
        <div class="border-b border-gray-800">
            <x-logo class="text-xl"/>
        </div>

        <div class="flex flex-col justify-between flex-1 mt-10">
            <nav class="flex flex-col gap-5 uppercase font-bold text-xs">

                <a href="{{ route('dashboard') }}" class="{{  Route::is('dashboard*') ? 'bg-indigo-900 text-white' : '' }}  p-2 hover:bg-indigo-900  transition-colors duration-300   hover:text-white rounded">
                    <i class="fa-solid fa-house"></i>
                    Dashboard
                </a>

                <a href="{{ route('inventarioMP') }}" class="{{  Route::is('inventarioMP*') ? 'bg-indigo-900 text-white' : '' }} p-2 hover:bg-indigo-900 transition-colors duration-300 hover:text-white rounded">
                    <i class="fa-solid fa-warehouse"></i>
                    Inventario Materia Prima
                </a>

                <a href="{{ route('oc') }}" class="{{  Route::is('oc*') ? 'bg-indigo-900 text-white' : '' }}  p-2 hover:bg-indigo-900  transition-colors duration-300  hover:text-white rounded">
                    <i class="fa-solid fa-shop"></i>
                    Ordenes de Compra
                </a>

                <a href="{{ route('proveedores') }}" class="{{  Route::is('proveedores*') ? 'bg-indigo-900 text-white' : '' }}  p-2 hover:bg-indigo-900  transition-colors duration-300  hover:text-white rounded">
                    <i class="fa-solid fa-users"></i>
                    Proveedores
                </a>

                <a href="{{ route('inventarioProductos') }}" class="{{  Route::is('inventarioProductos*') ? 'bg-indigo-900 text-white' : '' }} p-2 hover:bg-indigo-900 transition-colors duration-300 hover:text-white rounded">
                    <i class="fa-solid fa-warehouse"></i>
                    Inventario Productos
                </a>

                <a href="{{ route('pedidos') }}" class="{{  Route::is('pedidos*') ? 'bg-indigo-900 text-white' : '' }}  p-2 hover:bg-indigo-900  transition-colors duration-300  hover:text-white rounded">
                    <i class="fa-solid fa-truck"></i>
                    Pedidos
                </a>

                <a href="{{ route('produccion') }}" class="{{  Route::is('produccion*') ? 'bg-indigo-900 text-white' : '' }}  p-2 hover:bg-indigo-900  transition-colors duration-300  hover:text-white rounded">
                    <i class="fa-solid fa-database"></i>
                    Producción
                </a>

                <a href="{{ route('notificaciones') }}" class="{{  Route::is('notificaciones*') ? 'bg-indigo-900 text-white' : '' }}  p-2 hover:bg-indigo-900  transition-colors duration-300  hover:text-white rounded">
                    <span class="bg-indigo-800 px-2 py-0.5 rounded-lg text-white font-bold">{{ auth()->user()->unreadNotifications->count() }}</span>
                    Notificaciones
                </a>


{{-- 
                <a href="" class="{{  Route::is('productos*') ? 'bg-indigo-900 text-white' : '' }}  p-2 hover:bg-indigo-900  transition-colors duration-300  hover:text-white rounded">
                    <i class="fa-solid fa-bag-shopping"></i>
                    Productos
                </a> --}}
            </nav>

            <div class="flex flex-row gap-2 justify-center items-center font-bold uppercase text-sm border-t border-gray-800 p-2">
                <i class="fa-solid fa-user"></i>
                <p>{{ auth()->user()->name }}</p>
            </div>
        </div>

    </div>
</aside>