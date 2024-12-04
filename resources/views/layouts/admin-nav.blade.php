<nav x-data="{ open: false }" class="bg-white border-b border-black">
    @php
        $user = Auth::user();
    @endphp
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-content-around h-16">
            <div class="flex">

                <!-- Navigation Links -->
            
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
                    <x-sub-nav-link :href="route('admin.directors.index')" :active="request()->routeIs('admin.directors.index')">
                        {{ __('Directores') }}
                    </x-sub-nav-link>
                </div>
                
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-sub-nav-link :href="route('admin.actors.index')" :active="request()->routeIs('admin.actors.index')">
                        {{ __('Actores') }}
                    </x-sub-nav-link>
                </div>

                <div class="-me-2 flex items-center sm:hidden">
                    <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-content-around h-16">
            <div class="flex">

                <!-- Navigation Links -->
                
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-sub-nav-link :href="route('admin.genres.index')" :active="request()->routeIs('admin.genres.index')">
                        {{ __('Géneros') }}
                    </x-sub-nav-link>
                </div>
                
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-sub-nav-link :href="route('admin.platforms.index')" :active="request()->routeIs('admin.platforms.index')">
                        {{ __('Plataformas') }}
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
            <x-responsive-nav-link :href="route('admin.users.index')" :active="request()->routeIs('admin.users.index')">
                {{ __('Usuarios') }}
            </x-responsive-nav-link>
        </div>
        
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('admin.films.index')" :active="request()->routeIs('admin.films.index')">
                {{ __('Películas') }}
            </x-responsive-nav-link>
        </div>
        
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('admin.directors.index')" :active="request()->routeIs('admin.directors.index')">
                {{ __('Directores') }}
            </x-responsive-nav-link>
        </div>
        
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('admin.actors.index')" :active="request()->routeIs('admin.actors.index')">
                {{ __('Actores') }}
            </x-responsive-nav-link>
        </div>
        
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('admin.genres.index')" :active="request()->routeIs('admin.genres.index')">
                {{ __('Géneros') }}
            </x-responsive-nav-link>
        </div>
        
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('admin.platforms.index')" :active="request()->routeIs('admin.platforms.index')">
                {{ __('Plataformas') }}
            </x-responsive-nav-link>
        </div>
        
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('admin.avatars.index')" :active="request()->routeIs('admin.avatars.index')">
                {{ __('Avatares') }}
            </x-responsive-nav-link>
        </div>
        
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('admin.comments.index')" :active="request()->routeIs('admin.comments.index')">
                {{ __('Comentarios') }}
            </x-responsive-nav-link>
        </div>
    </div>
</nav>
