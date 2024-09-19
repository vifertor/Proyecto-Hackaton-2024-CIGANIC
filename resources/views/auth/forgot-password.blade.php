<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('¿Olvidaste tu contraseña? No hay problema. Solo danos tu correo electrónico y enviaremos un enlace de recuperación a tu correo.') }}
        </div>

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
        @endsession

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-label for="email" value="{{ __('Correo Electrónico') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="flex flex-col items-center justify-center mt-4 space-y-6">
                <!-- Botón verde de Enviar Enlace -->
                <x-button class="bg-green-500 text-white">
                    {{ __('Enviar enlace') }}
                </x-button>

                <!-- Botón rojo de Volver a iniciar sesión -->
                <a href="{{ route('login') }}" class="text-red-500 underline text-sm hover:text-red-700 mt-6">
                    {{ __('Volver a iniciar sesión') }}
                </a>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
