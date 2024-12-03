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
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                        >
                            <section class="row justify-content-around">
                                <button class="btn btn-warning col-10">Indica qué es lo que te gusta!</button>
                            </section>
                        </a>
                    @else
                        <a
                            href="{{ route('filmUsers.show', $user) }}"
                            style="text-decoration:none;"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                        >
                            <section class="row justify-content-around">
                                <button class="btn btn-warning col-10">Obtén una nueva recomendación!</button>
                            </section>
                        </a>
                        <a
                            href="{{ route('filmUsers.destroyFilters', $user) }}"
                            style="text-decoration:none;"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                        >
                            <section class="row justify-content-around">
                                <button class="btn btn-warning col-10">¿Han cambiado tus gustos? Indica qué es lo que te gusta ahora!</button>
                            </section>
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
