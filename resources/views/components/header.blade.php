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
                <a href="{{ route('pedidios') }}" class=" hover:text-gray-400 cursor-pointer">Mis Pedidos</a>
                <a href="{{ route('carrito') }}" class=" hover:text-gray-400 cursor-pointer flex flex-row gap-1 justify-center items-center">
                    <p class="bg-indigo-800 px-1.5 rounded">{{$cartCollection->count()}}</p>
                    <i class="fa-solid fa-cart-shopping"></i>
                </a>

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