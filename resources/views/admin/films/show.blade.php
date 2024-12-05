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
                <div class="p-6 text-white container">
                    <div class="row">
                        @include('layouts.show-film')
                        
                        <div class="form-group mb-3 d-flex">
                            <div class="ms-auto">
                                <a href="{{ route('admin.films.index') }}" class="text me-4 text-warning">Volver</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>