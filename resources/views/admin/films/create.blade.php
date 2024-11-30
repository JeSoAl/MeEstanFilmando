<x-app-layout>
    <x-slot name="header">
      <div class="flex">
        <h2 class="font-semibold text-xl text-warning leading-tight flex">
            {{ __('Filmes') }}
        </h2>
        <div class="ms-auto flex" align="right">
          <a href="{{ route('admin.films.create') }}" class="btn btn-sm btn-warning">Crear nuevo filme</a>
        </div>
      </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-900 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-white">
                  <x-header-title title="Nuevo film" subtitle=""></x-header-title>

                  <form action="{{ route('admin.films.store') }}" method="POST">
                    @csrf

                    <div class="row">
                        <div class="col-12 col-md-12">
                          <x-admin-card>
                            @include('admin.films.partials.form')

                            @include('admin.films.partials.buttons')
                          </x-admin-card>
                        </div>
                    </div>

                  </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>