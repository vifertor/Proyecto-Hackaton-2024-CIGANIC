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

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Styles -->
    <style>
        .submenu {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
            padding-left: 0; /* Ajusta según tu diseño */
        }

        .submenu.open {
            max-height: 500px; /* Ajusta según tu diseño */
        }

        .sidebar {
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .sidebar-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            padding-top: 60px; /* Ajusta este valor para controlar el espaciado vertical */
        }

        .sidebar-footer {
            margin-top: auto;
        }

        .font-flowbite {
            font-family: 'Flowbite', sans-serif;
        }
    </style>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased font-flowbite">
    <div class="flex h-screen bg-gray-100">
        <!-- Sidebar -->
        <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-80 h-full bg-white border-r border-gray-200 dark:bg-gray-800 dark:border-gray-700 sidebar" aria-label="Sidebar">
            <div class="sidebar-content">
                <!-- Menu Sections -->
                <ul class="font-medium p-4">
                    <li class="mb-2">
                        <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <i class="fas fa-home fa-lg me-3"></i>
                            <span>Inicio</span>
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group" id="toggle-animals">
                            <i class="fas fa-paw fa-lg me-3"></i>
                            <span>Mis animales</span>
                        </a>
                        <ul class="submenu space-y-2 mt-2">
                            <li>
                                <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                    <i class="fas fa-cow fa-lg me-3"></i>
                                    <span>Bobinos</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                    <i class="fas fa-piggy-bank fa-lg me-3"></i>
                                    <span>Porsinos</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <i class="fas fa-book fa-lg me-3"></i>
                            <span>Documentación</span>
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <i class="fas fa-info-circle fa-lg me-3"></i>
                            <span>Enfermedades</span>
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <i class="fas fa-capsules fa-lg me-3"></i>
                            <span>Tratamiento</span>
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <i class="fas fa-carrot fa-lg me-3"></i>
                            <span>Consulta alimentos</span>
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="{{ route('dashboard') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <i class="fas fa-info-circle fa-lg me-3"></i>
                            <span>Acerca de nosotros</span>
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="{{ route('ajustes') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <i class="fas fa-cogs fa-lg me-3"></i>
                            <span>Administración</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="sidebar-footer">
                <ul class="space-y-2 font-medium p-4">
                    <li class="mb-2">
                        <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <i class="fas fa-question-circle fa-lg me-3"></i>
                            <span>Ayuda</span>
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <i class="fas fa-address-book fa-lg me-3"></i>
                            <span>Contactos</span>
                        </a>
                    </li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group w-full text-left">
                            <i class="fas fa-sign-out-alt fa-lg me-3"></i>
                            <span>Log out</span>
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </aside>

        <div class="flex-1 flex flex-col ml-80">
            <!-- Navbar -->
            <nav class="fixed top-0 left-80 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                <div class="px-3 py-3 lg:px-5 lg:pl-3">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                                <span class="sr-only">Open sidebar</span>
                                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zm0-8.5a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 6.75z"></path>
                                </svg>
                            </button>
                            <a href="https://flowbite.com" class="flex ms-2 md:me-24">
                                <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 me-3" alt="FlowBite Logo" />
                                <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">CIGANIC</span>
                            </a>

                        </div>
                        <div class="flex items-center space-x-6">
                            <div class="flex items-center space-x-4">
    <!-- Notification bell -->
    <div class="notification-icon ms-2">
        <i class="fas fa-bell fa-lg text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-white"></i>
        <!-- Optional badge for unread notifications -->
        <span class="notification-badge"></span>
    </div>

                        <div class="flex items-center">
                            <div class="flex items-center ms-3">
                                <div>
                                    <button id="dropdown-user-button" data-dropdown-toggle="dropdown-user" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" type="button">
                                        <span class="sr-only">Open user menu</span>
                                        <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo" />
                                    </button>

                                    <div id="dropdown-user" class="z-10 hidden absolute top-12 right-0 w-44 text-base list-none bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600" aria-labelledby="dropdown-user-button">
                                        <div class="px-4 py-3">
                                            <div>
                                                <p class="text-sm font-medium text-gray-900 dark:text-white">{{ Auth::user()->name }}</p>
                                                <p class="text-sm text-gray-500 dark:text-gray-400">{{ Auth::user()->email }}</p>
                                            </div>
                                        </div>
                                        <ul class="py-1" aria-labelledby="dropdown-user-button">
                                            <li>
                                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                                            </li>

                                            <div class="flex items-center space-x-4">
                                                <!-- Updated User Settings Link -->
                                                <a href="/user/profile" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                                    <i class="fas fa-user fa-lg me-2"></i>
                                                    <span>Usuario</span>
                                                </a>
                                            </div>


                                            {{-- <li>
                                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                                            </li>
                                            <li>
                                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a>
                                            </li> --}}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <button data-collapse-toggle="mobile-menu-3" type="button" class="inline-flex items-center p-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-3" aria-expanded="false">
                                <span class="sr-only">Open main menu</span>
                                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 17 14" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 1.4A1.4 1.4 0 011.4 0h14.2A1.4 1.4 0 0117 1.4v11.2A1.4 1.4 0 0115.6 14H1.4A1.4 1.4 0 010 12.6V1.4zm14.2 8.8H2.8a.4.4 0 01-.4-.4v-1.2a.4.4 0 01.4-.4h11.4a.4.4 0 01.4.4v1.2a.4.4 0 01-.4.4zm0-4H2.8a.4.4 0 01-.4-.4V4.8a.4.4 0 01.4-.4h11.4a.4.4 0 01.4.4v1.2a.4.4 0 01-.4.4z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Page Content -->

        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
    <script>
        // JavaScript to toggle submenu visibility
        document.getElementById('toggle-animals').addEventListener('click', function() {
            const submenu = document.querySelector('.submenu');
            submenu.classList.toggle('open');
        });
    </script>
</body>
</html>
