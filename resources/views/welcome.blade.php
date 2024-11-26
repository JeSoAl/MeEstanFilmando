<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-warning text-xl leading-tight">
            {{ __('Inicio') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-900 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                @if (Route::has('login'))
                        <a
                            href="{{ route('login') }}"
                            style="text-decoration:none;"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                        >
                            <section class="row justify-content-around">
                                <button class="btn btn-warning col-10">Iniciar Sesión</button>
                            </section>
                        </a>

                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                style="text-decoration:none;"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                            >
                                <section class="row justify-content-around">
                                    <button class="btn btn-warning col-10">Registrarse</button>
                                </section>
                            </a>
                        @endif
                    </nav>
                @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>