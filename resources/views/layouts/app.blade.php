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
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.0/dist/alpine.js" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            {{-- @livewire('navigation-dropdown') --}}

            <!-- Page Heading -->
            {{-- <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header> --}}
            <header class="flex items-center justify-between py-2">
                <a href="#" class="px-2 lg:px-0 font-bold capitalize">
                    Tech Blog
                </a>
                <button class="block md:hidden px-2 text-3xl">
                    <i class='bx bx-menu'></i>
                </button>
                <ul class="hidden md:inline-flex items-center">
                    <li class="px-2 md:px-4">
                        <a href="" class="text-green-800 font-semibold hover:text-green-600"> Home </a>
                    </li>
                    <li class="px-2 md:px-4">
                        <a href="" class="text-gray-500 font-semibold hover:text-green-600"> About </a>
                    </li>
                    <li class="px-2 md:px-4">
                        <a href="" class="text-gray-500 font-semibold hover:text-green-600"> Press </a>
                    </li>
                    <li class="px-2 md:px-4">
                        <a href="" class="text-gray-500 font-semibold hover:text-green-600"> Contact </a>
                    </li>
                    <li class="px-2 md:px-4 hidden md:block">
                        <a href="" class="text-gray-500 font-semibold hover:text-green-600"> Login </a>
                    </li>
                    <li class="px-2 md:px-4 hidden md:block">
                        <a href="" class="text-gray-500 font-semibold hover:text-green-600"> Register </a>
                    </li>
                </ul>
        
            </header>

            <!-- Page Content -->
            <main>
                @yield('content')
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
