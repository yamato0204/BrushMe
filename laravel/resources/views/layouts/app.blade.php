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

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- min-h-screen-->
    </head>
    <body class="font-sans antialiased">
        <div class="fixed w-full">
            
            @include('layouts.navnav')

            <!-- Page Heading -->
            <header class="z-0 bg-gray-200 shadow  ">
                <div class="max-w-7xl mx-auto pt-12 pb-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        </div>
            

            <!-- Page Content -->
            <main class=" bg-blue-100  min-h-screen">
                {{ $slot }}
            </main>
        
    </body>
</html>
