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
<header class="mx-auto container f py-5 mb-4">
    <nav class="flex justify-between items-center">
        <ul class="flex ">
            <div>
                logo
            </div>
            <li class="mx-4 hover:text-blue-500"><a href="#">{{ __('Computer') }}</a></li>
            <li class="mx-4 hover:text-blue-500"><a href="#">{{ __('Component') }}</a></li>
            <li class="mx-4 hover:text-blue-500"><a href="#">{{ __('Periferic') }}</a></li>
            <li class="mx-4 hover:text-blue-500"><a href="#">{{ __('Gaming') }}</a></li>
            <li class="mx-4 hover:text-blue-500"><a href="#">{{ __('Network') }}</a></li>
        </ul>

        <ul class="flex">
            @guest
                <li class="mx-4 hover:text-blue-500"><a href="{{ route('login') }}">{{ __('login') }}</a></li>
                <li class="mx-4 hover:text-blue-500"><a href="{{ route('register') }}">{{ __('register') }}</a></li>
            @else
                <li class="mx-4 hover:text-blue-400"><a href="#">{{ __('Me') }}</a></li>
                <li>
                    <a class="nav-link" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            @endguest
        </ul>
    </nav>
</header>
<div class="container mx-auto px-5">
    @yield('content')
    @livewireScripts
</div>
</body>
</html>
