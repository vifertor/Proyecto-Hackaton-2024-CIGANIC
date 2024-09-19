<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Texto de introducción -->
            <div class="text-center mb-4">
                <p class="text-lg font-medium text-gray-900">{{ __('Registrarte para continuar') }}</p>
            </div>

            <div>
                <x-label for="name" value="{{ __('Nombre') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Correo electrónico') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Contraseña') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirmar contraseña') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <!-- Checkbox de términos y condiciones -->
            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4 flex items-center">
                    <x-checkbox id="terms" name="terms" required />
                    <x-label for="terms" class="ms-2">
                        {!! __('Aceptas los <a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Términos y Condiciones').'</a>') !!}
                    </x-label>
                </div>
            @endif

            <!-- Botón de Registrar (verde) -->
            <div class="mt-4">
                <x-button class="w-full flex justify-center bg-green-500 text-white hover:bg-green-600">
                    {{ __('Registrar') }}
                </x-button>
            </div>

            <!-- Separador para continuar con -->
            <div class="mt-4 text-center">
                <label class="text-sm text-gray-600">{{ __('O CONTINUAR CON') }}</label>
            </div>

            <!-- Botón de Continuar con Google (gris) -->
            <div class="mt-4">
                <x-button class="w-full flex justify-center items-center bg-gray-500 text-white hover:bg-gray-600">
                    <!-- Logo de Google en SVG -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" class="w-5 h-5 mr-2">
                        <path fill="#4285F4" d="M24 9.5c2.42 0 4.63.84 6.35 2.52l4.74-4.74C31.69 4.46 28.06 3 24 3 14.98 3 7.56 8.48 4.68 16.02l5.56 4.33C12.36 14.14 17.74 9.5 24 9.5z"/>
                        <path fill="#34A853" d="M24 44c5.78 0 10.64-1.93 14.19-5.26l-5.41-4.43c-2.42 1.62-5.55 2.69-8.78 2.69-6.3 0-11.63-4.25-13.54-10.16l-5.65 4.35C8.92 38.6 15.99 44 24 44z"/>
                        <path fill="#FBBC05" d="M10.46 26.84c-.43-1.27-.68-2.62-.68-4.02 0-1.4.25-2.75.68-4.02l-5.57-4.34C3.67 17.05 3 19.45 3 22c0 2.55.67 4.95 1.89 7.02l5.57-4.34z"/>
                        <path fill="#EA4335" d="M24 14.5c3.22 0 5.39 1.33 6.63 2.44l4.84-4.84C32.99 8.24 29.43 6 24 6c-6.26 0-11.64 4.64-13.77 10.34l5.67 4.36C18.68 17.56 21.03 14.5 24 14.5z"/>
                    </svg>
                    {{ __('Continuar con Google') }}
                </x-button>
            </div>

            <!-- Texto de ya tengo una cuenta -->
            <div class="flex items-center justify-center mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Ya tengo una cuenta') }}
                </a>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
