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
                  <x-header-title  :title="'Modificar los datos del usuario ' . $user->id" subtitle="" :links="[]">
                  </x-header-title>

                  <form action="{{ route('admin.users.update', ['user' => $user]) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-12 col-md-12">
                          <x-admin-card>
                            @include('admin.users.partials.form')

                            <div class="form-group mb-3">
                                <label for="suscription" class="form-label">Suscripción</label>
                                <select class="form-control chosen" id="suscription" name="suscription">
                                <option value="1" {{ $user->suscription == true ? 'selected="selected"' : '' }}>Sí</option>
                                <option value="0" {{ $user->suscription == false ? 'selected="selected"' : '' }}>No</option>
                                </select>
                            </div>

                            <div class="form-group mb-3">
                                <label for="admin" class="form-label">Administrador</label>
                                <select class="form-control chosen" id="admin" name="admin">
                                <option value="1" {{ $user->admin == true ? 'selected="selected"' : '' }}>Sí</option>
                                <option value="0" {{ $user->admin == false ? 'selected="selected"' : '' }}>No</option>
                                </select>
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