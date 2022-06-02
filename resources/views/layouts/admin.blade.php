<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <style>
        .side-links a {

            list-style: none;
            font-weight: 300;
            margin-bottom: 30px;
            display: flex;
            align-items: center;


        }

        .side-links .activa {
            color: white;
        }

        .side-links a {
            padding-left: 1.5rem;
            padding-right: 1.5rem;
            display: flex;
            margin-top: 1rem;
            align-items: center;
            transition: ease 0.4s;
        }

        .side-links a:hover {
            color: white;
            transform: translateX(10px);
        }
    </style>


    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    @bukStyles

</head>

<body class="font-sans antialiased">
    <x-jet-banner />

    <div class="min-h-screen bg-gray-100">


        <!-- Page Content -->
        <main>
            <div>
                <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

                <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200">
                    <div :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false"
                        class="fixed z-20 inset-0 bg-black opacity-50 transition-opacity lg:hidden"></div>

                    <div :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'"
                        class="fixed z-30 inset-y-0 left-0 w-64 transition duration-300 transform bg-gray-900 overflow-y-auto lg:translate-x-0 lg:static lg:inset-0">
                        <div class="flex items-center justify-center mt-8">
                            <div class="flex items-center">
                                <a href="/">
                                    <svg class="h-12 w-12" viewBox="0 0 512 512" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M364.61 390.213C304.625 450.196 207.37 450.196 147.386 390.213C117.394 360.22 102.398 320.911 102.398 281.6C102.398 242.291 117.394 202.981 147.386 172.989C147.386 230.4 153.6 281.6 230.4 307.2C230.4 256 256 102.4 294.4 76.7999C320 128 334.618 142.997 364.608 172.989C394.601 202.981 409.597 242.291 409.597 281.6C409.597 320.911 394.601 360.22 364.61 390.213Z"
                                            fill="#4C51BF" stroke="#4C51BF" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path
                                            d="M201.694 387.105C231.686 417.098 280.312 417.098 310.305 387.105C325.301 372.109 332.8 352.456 332.8 332.8C332.8 313.144 325.301 293.491 310.305 278.495C295.309 263.498 288 256 275.2 230.4C256 243.2 243.201 320 243.201 345.6C201.694 345.6 179.2 332.8 179.2 332.8C179.2 352.456 186.698 372.109 201.694 387.105Z"
                                            fill="white"></path>
                                    </svg>
                                </a>

                                <span class="text-white text-2xl mx-2 font-semibold">Blog-Aero-Sim</span>


                            </div>
                        </div>

                        <nav class="side-links">
                            <a class="{{Request::routeIs('admin.home') ? 'activa' : 'text-gray-500'}}"
                                href="{{ route('admin.home') }}">
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                                </svg>

                                <span class="mx-3">Home</span>
                            </a>

                            <a class="{{Request::routeIs('admin.posts.*') ? 'activa' : 'text-gray-500'}}"
                                href="{{ route('admin.posts.index') }}">
                                <x-bi-postcard-heart class="h-6 w-6" />


                                <span class="mx-3">Posts</span>
                            </a>

                            <a class="{{Request::routeIs('admin.posts.create') ? 'activa' : 'text-gray-500'}}"
                                href="{{ route('admin.posts.create') }}">
                                <x-eos-post-add class="h-6 w-6" />



                                <span class="mx-3">Crear Post</span>
                            </a>



                            <a class="{{Request::routeIs('admin.categories.*') ? 'activa' : 'text-gray-500'}}"
                                href="{{ route('admin.categories.index') }}">
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z">
                                    </path>
                                </svg>

                                <span class="mx-3">Categorías</span>
                            </a>

                            <a class="{{Request::routeIs('admin.categories.create') ? 'activa' : 'text-gray-500'}}"
                                href="{{ route('admin.categories.create') }}">
                                <x-heroicon-o-duplicate class="h-6 w-6" />


                                <span class="mx-3">Crear Categoría</span>
                            </a>

                            <a class="{{Request::routeIs('admin.tags.*') ? 'activa' : 'text-gray-500'}}"
                                href="{{ route('admin.tags.index') }}">
                                <x-heroicon-o-tag class="h-6 w-6" />

                                <span class="mx-3">Tags</span>
                            </a>

                            <a class="{{Request::routeIs('admin.tags.create') ? 'activa' : 'text-gray-500'}}"
                                href="{{ route('admin.tags.create') }}">
                                <x-heroicon-o-pencil-alt class="h-6 w-6" />


                                <span class="mx-3">Crear Tag</span>
                            </a>

                            @can('user_access')
                            <a class="{{Request::routeIs('admin.users.*') ? 'activa' : 'text-gray-500'}}"
                                href="{{ route('admin.users.index') }}">
                                <x-heroicon-o-users class="h-6 w-6" />

                                <span class="mx-3">Usuarios</span>
                            </a>
                            @endcan

                            @can('tour_access')
                            <a class="{{Request::routeIs('admin.tours.*') ? 'activa' : 'text-gray-500'}}"
                                href="{{ route('admin.tours.index') }}">
                                <x-heroicon-o-globe-alt class="h-6 w-6" />

                                <span class="mx-3">Rutas</span>
                            </a>
                            @endcan

                            @can('tour_access')
                            <a class="{{Request::routeIs('admin.tours.create') ? 'activa' : 'text-gray-500'}}"
                                href="{{ route('admin.tours.create') }}">
                                <x-heroicon-o-trending-up class="h-6 w-6" />

                                <span class="mx-3">Crear Ruta</span>
                            </a>
                            @endcan

                            <a class="{{Request::routeIs('admin.cartas.*') ? 'activa' : 'text-gray-500'}}"
                                href="{{ route('admin.cartas.index') }}">
                                <x-heroicon-o-map class="h-6 w-6" />

                                <span class="mx-3">Cartas & Fp</span>
                            </a>

                            <a class="{{Request::routeIs('admin.cartas.create') ? 'activa' : 'text-gray-500'}}"
                                href="{{ route('admin.cartas.create') }}">
                                <x-heroicon-s-view-grid-add class="h-6 w-6" />


                                <span class="mx-3">Agregar Contenido</span>
                            </a>

                        </nav> 
                    </div>

                    <div class="flex-1 flex flex-col overflow-hidden">

                        <header
                            class="flex justify-between items-center py-4 px-6 bg-white border-b-4 border-indigo-600">
                            <div class="flex items-center">
                                <button @click="sidebarOpen = true" class="text-gray-500 focus:outline-none lg:hidden">
                                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </button>
                            </div>

                            <div class="flex items-center">


                                <div x-data="{ dropdownOpen: false }" class="relative">
                                    <button @click="dropdownOpen = ! dropdownOpen"
                                        class="relative block h-8 w-8 rounded-full overflow-hidden shadow focus:outline-none">
                                        <img class="h-full w-full object-cover"
                                            src="{{ Auth::user()->profile_photo_url }}" alt="Your avatar">
                                    </button>

                                    <div x-show="dropdownOpen" @click="dropdownOpen = false"
                                        class="fixed inset-0 h-full w-full z-10" style="display: none;"></div>

                                    <div x-show="dropdownOpen"
                                        class="absolute right-0 mt-2 w-48 bg-white rounded-md overflow-hidden shadow-xl z-10"
                                        style="display: none;">
                                        <a href="{{ route('profile.show') }}"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Perfil</a>
                                        <a href="{{ route('home') }}"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Home</a>
                                        <form method="POST" action="{{ route('logout') }}" x-data>
                                            @csrf

                                            <a href="{{ route('logout') }}"
                                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white"
                                                @click.prevent="$root.submit();">
                                                {{ __('Cerrar Sesión') }}
                                            </a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </header>
                        {{ $slot }}
                    </div>
                </div>

            </div>
        </main>
    </div>

    @stack('modals')

    @livewireScripts

    @bukScripts

</body>

</html>