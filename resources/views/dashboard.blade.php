<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Contenedor Flex para alinear el contenido a la derecha -->
            <div class="flex justify-end">
                <!-- Contenedor Principal Ajustado -->
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 max-w-md">
                    <!-- Bienvenida -->
                    <h3 class="text-2xl font-semibold">
                        Bienvenido, {{ Auth::user()->name }}!
                    </h3>
                    <p class="mt-4 text-gray-600">
                        Esta es la información general del proyecto.
                    </p>

                    <!-- Acerca del Proyecto -->
                    <h4 class="mt-8 text-xl font-semibold">
                        Acerca de Nosotros y Nuestro Proyecto
                    </h4>
                    <p class="mt-4 text-gray-600">
                        Nuestro proyecto para la Hackatón Ciganic está enfocado en la agropecuaria. Es un sistema que permite gestionar la salud del ganado, ayudando al control de las vacunas, diagnóstico de enfermedades y tratamiento orgánico ajustado a las necesidades de cada animal.
                    </p>

                    <!-- Contacto -->
                    <h4 class="mt-8 text-xl font-semibold">
                        Contáctanos
                    </h4>
                    <p class="mt-4 text-gray-600">
                        Para más información sobre nuestros servicios o si tienes alguna pregunta, no dudes en contactarnos.
                    </p>
                    <ul class="mt-4 text-gray-600">
                        <li><strong>Correo electrónico:</strong> vifertor123@gmail.com</li>
                        <li><strong>Teléfono:</strong> +505 78420276</li>
                        <li><strong>Dirección:</strong> Centro Tecnológico Ricardo Morales Avilés, Diriamba-Carazo</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
