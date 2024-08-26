<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="/pictures/MeEstanFilmando2.png"/>

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="/css/bootstrap.min.css" />

    </head>
    <body class="bg-dark" style="margin:0;">
        <nav class="navbar navbar-expand-sm navbar-black bg-black fixed-top">
            <a class="navbar-brand" href="/"><img src="/pictures/MeEstanFilmando2.png" width="100"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <section class="collapse navbar-collapse" id="menu">
                <nav class="navbar-nav">
                    <a class="nav-link text-white active" href="index.html">Inicio</a>
                    <a class="nav-link text-white" href="nosotros.html">Nosotros</a>
                </nav>
            </section>
        </nav>
                    <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                        <div class="flex lg:justify-center lg:col-start-2">
                            <br><br><br><br>
                        </div>
                        @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                    <a
                                        href="{{ url('/dashboard') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Dashboard
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        style="text-decoration:none;"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        <section class="row justify-content-around">
                                            <button class="btn btn-warning col-11">Iniciar Sesión</button>
                                        </section>
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            style="text-decoration:none;"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                        >
                                            <section class="row justify-content-around">
                                                <button class="btn btn-warning col-11">Registrarse</button>
                                            </section>
                                        </a>
                                    @endif
                                @endauth
                            </nav>
                        @endif
                    </header>

                    <main class="mt-6">
                        
                    </main>

                    <br>

                    <footer class="py-16 text-center text-sm text-white dark:text-white/70 bg-black">
                        Me Están Filmando &trade;
                        <br>
                        <p style="opacity:0.35;">A project by Jesús Sorribas Álvarez</p>
                    </footer>
    </body>
</html>
