<x-app-layout>
    <x-slot name="header">
      <div class="flex">
        <h2 class="font-semibold text-xl text-warning leading-tight flex">
            {{ __('Indica qué es lo que te gusta!') }}
        </h2>
      </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-900 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-white">
                  <form action="{{ route('admin.films.storeFilters', Auth::user()) }}" method="POST">
                    @csrf

                    <div class="row">
                        <div class="col-12 col-md-12">
                          <x-admin-card>
                            @include('filmUsers.partials.form')

                            @include('filmUsers.partials.buttons')
                          </x-admin-card>
                        </div>
                    </div>

                  </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>