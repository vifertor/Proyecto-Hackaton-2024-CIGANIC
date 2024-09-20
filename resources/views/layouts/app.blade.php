<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css'])
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <!-- Contenedor Principal Flexbox -->
        <div class="min-h-screen bg-gray-100 flex">
            <!-- Sidebar -->
            <aside class="w-1/4 bg-gray-800 text-white p-4">
                @livewire('sidebar')
            </aside>

            <!-- Contenido Principal -->
                <div class="flex-1 p-4" style="margin-left: 250px;"> <!-- Ajusta el valor según el ancho del sidebar -->
            @if (isset($header))
                <header class="bg-white mb-4" style="margin-top: 80px;"> <!-- Margen superior aumentado -->
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

                <!-- Page Content -->
                <main>
                    {{ $slot }}
                </main>

            </div>
        </div>

        @stack('modals')

        @livewireScripts

        <!-- Scripts -->
        @vite(['resources/js/app.js'])
        <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
    </body>
</html>

