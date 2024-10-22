<div>
    <header class="flex flex-row p-8 bg-indigo-500 text-white justify-between">
        <x-logo class="text-4xl"/>
        <nav class="md:flex flex-row gap-10 justify-center items-center uppercase font-bold hidden">
            <a href="{{ route('productos') }}" class="{{  Route::is('productos*') ? 'text-gray-800' : '' }} hover:text-gray-400">Productos</a>
            <a href="#" class="hover:text-gray-400">Contactanos</a>

            @guest
                <a href="{{ route('login') }}" class="{{  Route::is('login*') ? 'text-gray-800' : '' }} hover:text-gray-400">Iniciar Sesión</a>
                <a href="{{ route('register') }}" class="{{  Route::is('register*') ? 'text-gray-800' : '' }} hover:text-gray-400">Registrarse</a>
            @endguest
            
            @auth
                <a class=" hover:text-gray-400 cursor-pointer">Mis Pedidos</a>
                <a class=" hover:text-gray-400 cursor-pointer">Carrito</a>

                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <input type="submit" value="CERRAR SESIÓN" class="hover:text-gray-400 cursor-pointer">
                </form>

                @role('admin')
                    <a href="{{ route('dashboard') }}" class=" hover:text-gray-400 cursor-pointer">Administración</a>
                @endrole
            @endauth
       
        </nav>
    </header>
</div>