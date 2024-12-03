<x-app-layout>
    <x-slot name="header">
      <div class="flex">
        <h2 class="font-semibold text-xl text-warning leading-tight flex">
            {{ __('Avatares') }}
        </h2>
        <div class="ms-auto flex" align="right">
          <a href="{{ route('admin.avatars.create') }}" class="btn btn-sm btn-warning">Crear nuevo avatar</a>
        </div>
      </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-900 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-white">
                  <x-header-title  :title="'Modificar los datos del galardón ' . $avatar->id" subtitle="" :links="[]">
                  </x-header-title>

                  <form action="{{ route('admin.avatars.update', $avatar) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-12 col-md-12">
                          <x-admin-card>
                            @include('admin.avatars.partials.form')

                            @include('admin.avatars.partials.buttons')
                          </x-admin-card>
                        </div>
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>