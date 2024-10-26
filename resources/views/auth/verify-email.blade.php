@extends('layouts.public')

@section('titulo')
    Email de Verificación
@endsection

@section('contenido')
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400 w-1/4 mx-auto">
        <p class="text-xl">
            {{ __('Gracias por registrarte! Hemos enviado un correo de verificación a tu email. Si no te ha llegado el correo oprime en reenviar.') }}
        </p>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                {{ __('Hemos enviado otro correo de verificación al correo con el que te registraste!') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-primary-button>
                        {{ __('Volver a enviar') }}
                    </x-primary-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                    {{ __('Cerrar Sesión') }}
                </button>
            </form>
        </div>
    </div>
@endsection 
 
 
