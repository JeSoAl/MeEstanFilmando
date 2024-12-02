<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" type="image/png" href="/pictures/MeEstanFilmando3.png"/>

        <title>Me Están Filmando</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="/css/bootstrap.min.css" />
        <style>
            .body {
                height: 100%;
                display: flex;
                flex-direction: column;
            }

            .body > * {
                flex-shrink: 0;
            }
            
            .footer {
                flex-grow: 1;
            }   
        </style>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen flex flex-col bg-gray-800 body">
            <!-- Page Navigation bar -->
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-gray-900 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <div class="flex flex-col sm:justify-center items-center pt-6 mb-10 sm:pt-0 bg-gray-800">
                <div>
                    @auth
                        <a href="{{ route('dashboard') }}">
                            <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                        </a>
                    @else
                        <a href="{{ route('/') }}">
                            <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                        </a>
                    @endauth
                </div>
                <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                    {{ $slot }}
                </div>
            </div>

            <!-- Page Footer -->
            @include('layouts.footer')
        </div>
    </body>
</html>
