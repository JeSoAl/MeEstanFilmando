<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-warning text-xl leading-tight">
            {{ __('Inicio') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-900 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-white">
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit gravida habitant ultrices nisl,
                        libero per quam porttitor hac fringilla sagittis litora himenaeos volutpat. Egestas viverra netus
                        non vulputate conubia torquent phasellus curae vehicula, facilisis dapibus nisl lacinia lacus felis
                        consequat fermentum urna scelerisque, sollicitudin at primis massa varius dui ad habitasse. Potenti
                        curae mattis conubia odio morbi vitae condimentum blandit pretium, ornare maecenas magnis cubilia
                        dictum purus arcu aliquam, suspendisse nulla est accumsan a orci class duis.
                    </p>
                    <br>
                    <p>Fusce hendrerit luctus ut suscipit ornare curabitur aptent nostra phasellus, suspendisse primis
                        blandit vehicula ultrices vestibulum rutrum quis praesent, ac habitasse posuere semper penatibus
                        sociis orci tempor. Tellus class fringilla quam purus metus sociosqu vestibulum, lacus auctor suscipit
                        euismod proin mattis sagittis, blandit senectus lobortis viverra ac sapien. Porta viverra facilisis
                        accumsan blandit hendrerit torquent vel risus fringilla nibh per semper a, vivamus neque fermentum
                        ridiculus rhoncus fames velit netus tincidunt eros litora.
                    </p>
                    <br>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit gravida habitant ultrices nisl,
                        libero per quam porttitor hac fringilla sagittis litora himenaeos volutpat. Egestas viverra netus
                        non vulputate conubia torquent phasellus curae vehicula, facilisis dapibus nisl lacinia lacus felis
                        consequat fermentum urna scelerisque, sollicitudin at primis massa varius dui ad habitasse. Potenti
                        curae mattis conubia odio morbi vitae condimentum blandit pretium, ornare maecenas magnis cubilia
                        dictum purus arcu aliquam, suspendisse nulla est accumsan a orci class duis.
                    </p>
                    <br>
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
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>