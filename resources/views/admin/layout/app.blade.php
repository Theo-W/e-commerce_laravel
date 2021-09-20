<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>Laravel</title>
    <style>
        html {
            scroll-behavior: smooth;
        }

        [x-cloak] {
            display: none !important;
        }
    </style>
    @livewireStyles
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</head>
<body>
<div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200">
    <div :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false"
         class="fixed z-20 inset-0 bg-black opacity-50 transition-opacity lg:hidden"></div>

    <div :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'"
         class="fixed z-30 inset-y-0 left-0 w-64 transition duration-300 transform bg-white overflow-y-auto lg:translate-x-0 lg:static lg:inset-0">
        <div class="flex items-center justify-center mt-8">
            <div class="flex items-center">
                <svg class="h-12 w-12" viewBox="0 0 512 512" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M364.61 390.213C304.625 450.196 207.37 450.196 147.386 390.213C117.394 360.22 102.398 320.911 102.398 281.6C102.398 242.291 117.394 202.981 147.386 172.989C147.386 230.4 153.6 281.6 230.4 307.2C230.4 256 256 102.4 294.4 76.7999C320 128 334.618 142.997 364.608 172.989C394.601 202.981 409.597 242.291 409.597 281.6C409.597 320.911 394.601 360.22 364.61 390.213Z"
                        fill="#4C51BF" stroke="#4C51BF" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                    <path
                        d="M201.694 387.105C231.686 417.098 280.312 417.098 310.305 387.105C325.301 372.109 332.8 352.456 332.8 332.8C332.8 313.144 325.301 293.491 310.305 278.495C295.309 263.498 288 256 275.2 230.4C256 243.2 243.201 320 243.201 345.6C201.694 345.6 179.2 332.8 179.2 332.8C179.2 352.456 186.698 372.109 201.694 387.105Z"
                        fill="white"></path>
                </svg>

                <span class="text-blue-500 text-2xl mx-2 font-semibold">Dashboard</span>
            </div>
        </div>

        <nav class="mt-10 flex flex-col content-between">
            <li>
                <a class="flex items-center mt-4 py-2 px-6 text-black hover:text-blue-500"
                   href="{{ route('admin.home') }}">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                    </svg>

                    <span class="mx-3">Dashboard</span>
                </a>
                <a class="flex items-center ml-2 mt-4 py-2 px-6 text-black hover:text-blue-500"
                   href="{{ route('admin.category.index') }}">
                    <i class="far fa-folder-open"></i>
                    <span class="mx-3">Catégory</span>
                </a>
                <a class="flex items-center ml-2 py-2 px-6 text-black hover:text-blue-500"
                   href="{{ route('admin.status.index') }}">
                    <i class="fas fa-toggle-on"></i>
                    <span class="mx-3">Status</span>
                </a>
                <a class="flex items-center ml-2 py-2 px-6 text-black hover:text-blue-500"
                   href="{{ route('admin.category.index') }}">
                    <i class="far fa-folder-open"></i>
                    <span class="mx-3">Articles</span>
                </a>
            </li>
        </nav>
    </div>
    <div class="flex-1 flex flex-col overflow-hidden">
        <header class="flex justify-between items-center py-4 px-6 bg-white border-b-4 border-indigo-600">
            <div class="flex items-center">
                <button @click="sidebarOpen = true" class="text-gray-500 focus:outline-none lg:hidden">
                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"></path>
                    </svg>
                </button>

                <div class="relative mx-4 lg:mx-0">
                        <span class="absolute inset-y-0 left-0 pl-3 flex items-center">
                            <svg class="h-5 w-5 text-gray-500" viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                </path>
                            </svg>
                        </span>

                    <input class="form-input w-32 sm:w-64 rounded-md pl-10 pr-4 focus:border-indigo-600" type="text"
                           placeholder="Search">
                </div>
            </div>

            <div class="flex items-center">
                <div class="relative">
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </a>
                </div>
            </div>
        </header>
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100">
            <div class="container mx-auto px-6 py-8">
                @yield('content')
                @livewireScripts
            </div>
        </main>
    </div>
</div>
</body>
</html>
