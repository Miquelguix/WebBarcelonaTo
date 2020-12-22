<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title', 'Barcelonato To...')</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Marcellus+SC,Nunito:wght@400;600;700&display=swap">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"/> 
        <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.1.0/dist/MarkerCluster.css" />
        <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.1.0/dist/MarkerCluster.Default.css" />
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Marcellus+SC&display=swap" rel="stylesheet">
        
        
        
        
        <!-- Scripts -->
        <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"></script> 
        <script src="https://unpkg.com/leaflet.markercluster@1.1.0/dist/leaflet.markercluster.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.0/dist/alpine.js" defer></script>
        

        @livewireStyles
    </head>
    <body class="w-screen m-auto antialiased bg-white">
        {{-- <div class="bg-white "> --}}

            <!-- Page Heading -->
            
            <header class="z-50">
              @include ('navigation-dropdown') 

            </header>

            <!-- Page Content -->
            <main>
                <div class="h-14"></div>

                <div class="z-10 max-w-6xl m-auto">

                    @isset($slot)
                        {{$slot}}
                    @endisset
                    @yield('content')
                </div>

            </main>
  
        @livewireScripts
    </body>
</html>
