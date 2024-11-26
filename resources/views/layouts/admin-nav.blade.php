<nav x-data="{ open: false }" class="bg-white border-b border-black">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-content-around h-16">
            <div class="flex">

                <!-- Navigation Links -->
                @php
                    $user = Auth::user();
                @endphp
            
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-sub-nav-link :href="route('admin.users.index')" :active="request()->routeIs('admin.users.index')">
                        {{ __('Usuarios') }}
                    </x-sub-nav-link>
                </div>
            
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-sub-nav-link :href="route('admin.films.index')" :active="request()->routeIs('admin.films.index')">
                        {{ __('Películas') }}
                    </x-sub-nav-link>
                </div>
                
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-sub-nav-link :href="route('admin.genres.index')" :active="request()->routeIs('admin.genres.index')">
                        {{ __('Géneros') }}
                    </x-sub-nav-link>
                </div>
                
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-sub-nav-link :href="route('admin.directors.index')" :active="request()->routeIs('admin.directors.index')">
                        {{ __('Directores') }}
                    </x-sub-nav-link>
                </div>
                
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-sub-nav-link :href="route('admin.actors.index')" :active="request()->routeIs('admin.actors.index')">
                        {{ __('Actores') }}
                    </x-sub-nav-link>
                </div>
            </div>
        </div>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-content-around h-16">
            <div class="flex">

                <!-- Navigation Links -->
                @php
                    $user = Auth::user();
                @endphp
                
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-sub-nav-link :href="route('admin.platforms.index')" :active="request()->routeIs('admin.platforms.index')">
                        {{ __('Plataformas') }}
                    </x-sub-nav-link>
                </div>
                
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-sub-nav-link :href="route('admin.awards.index')" :active="request()->routeIs('admin.awards.index')">
                        {{ __('Galardones') }}
                    </x-sub-nav-link>
                </div>
                
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-sub-nav-link :href="route('admin.suscriptions.index')" :active="request()->routeIs('admin.ususcriptions.index')">
                        {{ __('Suscripciones') }}
                    </x-sub-nav-link>
                </div>
                
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-sub-nav-link :href="route('admin.avatars.index')" :active="request()->routeIs('admin.avatars.index')">
                        {{ __('Avatares') }}
                    </x-sub-nav-link>
                </div>
                
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-sub-nav-link :href="route('admin.comments.index')" :active="request()->routeIs('admin.comments.index')">
                        {{ __('Comentarios') }}
                    </x-sub-nav-link>
                </div>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>
    </div>
</nav>
