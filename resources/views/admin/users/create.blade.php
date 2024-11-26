<x-app-layout>
    <x-slot name="header">
      <div class="flex">
        <h2 class="font-semibold text-xl text-warning leading-tight flex">
            {{ __('Usuarios') }}
        </h2>
        <div class="ms-auto flex" align="right">
          <a href="{{ route('admin.users.create') }}" class="btn btn-sm btn-warning">Crear nuevo usuario</a>
        </div>
      </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-900 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-white">
                  <x-header-title title="Nuevo usuario" subtitle=""></x-header-title>

                  <form action="{{ route('admin.users.store') }}" method="POST">
                    @csrf

                    <div class="row">
                        <div class="col-12 col-md-12">
                          <x-admin-card>
                            @include('admin.users.partials.form')

                            <div class="form-group mb-3">
                              <label for="password" class="form-label">Contraseña</label>
                              <input class="form-control" type="password" id="password" name="password">
                              <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <div class="form-group mb-3">
                              <label for="password_confirmation" class="form-label">Confirmar Contraseña</label>
                              <input id="password_confirmation" type="password" class="form-control" name="password_confirmation">
                              <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>

                            @include('admin.users.partials.buttons')
                          </x-admin-card>
                        </div>
                    </div>

                  </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>