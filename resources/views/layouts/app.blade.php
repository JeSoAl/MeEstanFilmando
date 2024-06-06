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

        <!-- Scripts -->
        @vite(['resources/scss/admin.scss'])
    </head>

    <body class="pace-done" data-layout="horizontal">
        {{-- @show --}}
        <!-- Begin page -->
        <div id="layout-wrapper">
          @include('layouts.navigation')
          <!-- ============================================================== -->
          <!-- Start right Content here -->
          <!-- ============================================================== -->
          <div id="app" class="main-content">
            <div class="page-content">
              <div class="container container-xxl">
                @yield('content')
              </div>
              <!-- container-fluid -->
            </div>
          </div>
          <!-- end main content-->
        </div>

        @vite(['resources/js/admin.js'])
    </body>
</html>
