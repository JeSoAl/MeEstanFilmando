<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-warning leading-tight">
            {{ __("Bienvenido, ". Auth::user()->name) }}
        </h2>
    </x-slot>

<?php
  $user = Auth::user();
?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-900 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-white">
                    @if (Auth::user()->recomendation == 0)
                        <a
                            href="{{ route('filmUsers.create') }}"
                            style="text-decoration:none;"
                            class="rounded-md mb-2 mainLink row px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                        >
                            <section class="col-12 justify-content-around text-center bg-warning display-6 rounded-pill">
                                <br>Indica qué es lo que te gusta!<br>&nbsp;
                            </section>
                        </a>
                    @else
                        <a
                            href="{{ route('filmUsers.show', $user) }}"
                            style="text-decoration:none;"
                            class="rounded-md mb-2 mainLink row px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                        >
                            <section class="col-12 justify-content-around text-center bg-warning display-6 rounded-pill">
                                <br>Obtén una nueva recomendación!<br>&nbsp;
                            </section>
                        </a>
                    @endif
                        <a
                            href="{{ route('films.create') }}"
                            style="text-decoration:none;"
                            class="rounded-md mb-2 mainLink row px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                        >
                            <section class="col-12 justify-content-around text-center bg-warning display-6 rounded-pill">
                                <br>Hoy me apetece otra cosa<br>&nbsp;
                            </section>
                        </a>
                    @if (Auth::user()->recomendation != 0)
                        <a
                            href="{{ route('filmUsers.create') }}"
                            style="text-decoration:none;"
                            class="rounded-md mb-2 mainLink row px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                        >
                            <section class="col-12 justify-content-around text-center bg-warning display-6 rounded-pill">
                                <br>¿Han cambiado tus gustos?<br>Indica qué es lo que te gusta ahora!<br>&nbsp;
                            </section>
                        </a>
                        <form action="{{ route('filmUsers.destroyAll', $user) }}" method="POST" class="me-1 w-auto d-flex justify-content-center">
                        @csrf
                        
                                <button type="submit" class="rounded-md w-100 mainLink row justify-content-center px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                    <section class="col-12 justify-content-around bg-warning display-6 rounded-pill">
                                        Reiniciar películas ya vistas
                                    </section>
                                </button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
