@extends('layouts.public')

@section('titulo')
    Bienvenido
@endsection

@section('contenido')
    <section>
        <div class="relative w-full" data-aos="zoom-out-right">
            <img src="{{ asset('img/textilsmart-bg.jpg') }}" alt="Fabric Img" class="w-full h-96 object-cover">
            <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 shadow-lg text-white flex flex-col gap-5">
                <x-logo class="text-4xl"/>
                <p class="uppercase font-bold text-center">La empresa de textiles número uno en Guatemala con más de 20 años de experiencia en el mercado</p>
                <a href="" class="btn bg-indigo-600 hover:bg-indigo-800">
                    Comprar Ahora
                </a>
            </div>
        </div>
    </section>

    <section class="p-5">
        <div class="text-center mb-5">
            <h2 class="uppercase  font-bold text-3xl">Productos Destacados</h2>
            <p class="text-xl">Conoce nuestros productos más vendidos</p>
        </div>

        <x-productos :productos="$productos" class="grid-cols-1 md:grid-cols-3"/>

        <div class="mt-10 flex justify-end" >
            <a href="" class="btn bg-indigo-600 hover:bg-indigo-800 inline-block">
                Ver Catálogo
            </a>
        </div>
    </section>


    <section>
        <div class="text-center">
            <h2 class="uppercase  font-bold text-3xl">Lo que ofrecemos</h2>
        </div>

        <div class="flex flex-col md:flex-row justify-center mt-5 gap-5 md:p-10">
            <div class="text-center flex flex-col justify-center items-center p-24 shadow-xl shadow-slate-400 border" data-aos="zoom-in">
                <img src="{{ asset('img/quality.png') }}" alt="Quality Icon" class="w-32">
                <p class="uppercase font-bold">Calidad</p>
                <p class="text-sm mt-5">Nos enorgullecemos de ofrecer telas de alta calidad, con materiales cuidadosamente seleccionados que garantizan acabados impecables, colores vibrantes y texturas suaves al tacto.</p>
            </div>

            <div class="text-center flex flex-col justify-center items-center p-24 shadow-xl shadow-slate-400 border" data-aos="zoom-in-up">
                <img src="{{ asset('img/durability.png') }}" alt="Quality Icon" class="w-32">
                <p class="uppercase font-bold">Durabilidad</p>
                <p class="text-sm mt-5">Nuestras telas están diseñadas para ofrecer una durabilidad excepcional, asegurando que cada pieza mantenga su integridad y resistencia a lo largo del tiempo, incluso con un uso constante.</p>
            </div>

            <div class="text-center flex flex-col justify-center items-center p-24 shadow-xl shadow-slate-400 border" data-aos="zoom-in-down">
                <img src="{{ asset('img/price.png') }}" alt="Quality Icon" class="w-32">
                <p class="uppercase font-bold">Precios Accesibles</p>
                <p class="text-sm mt-5">Creemos que la calidad no tiene por qué ser costosa. Por eso, ofrecemos precios competitivos para que puedas disfrutar de productos premium sin afectar tu presupuesto.</p>
            </div>
        </div>
    </section>
@endsection