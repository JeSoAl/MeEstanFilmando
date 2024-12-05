<x-app-layout>
    <x-slot name="header">
      <div class="flex">
        <h2 class="font-semibold text-xl text-warning leading-tight flex">
            {{ __(Auth::user()->name) }}
        </h2>
      </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-900 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-white">
                  <x-header-title  :title="'Modifica algunos de tus datos'" subtitle="" :links="[]">
                  </x-header-title>

                  <form action="{{ route('users.update', $user) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-12 col-md-12">
                          <x-admin-card>
                            <div class="form-group mb-3">
                                <label for="name" class="form-label">Nombre</label>
                                <input class="form-control" type="text" id="name" name="name" value="{{ old('name') ?? $user->name }}">
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label">Avatar</label><br>
                                <?php
                                    $i = 0;
                                ?>
                                @foreach ($avatars as $avatar)
                                    @if ($i == 0)
                                        <div class="row">
                                    @endif
                                        <div class="col">
                                    @if ($user->avatar_id == $avatar->id)
                                        <input type="radio" id="avatar{{$avatar->id}}" name="avatar_id" value="{{$avatar->id}}" checked>
                                    @else
                                        <input type="radio" id="avatar{{$avatar->id}}" name="avatar_id" value="{{$avatar->id}}">
                                    @endif
                                    <label class="form-label" for="avatar{{$avatar->id}}"><img src="{{$avatar->picture}}" width="300"></label><br>
                                    </div>
                                    <?php
                                    $i++;
                                    ?>
                                    @if ($i == 2)
                                    </div>
                                    <?php
                                        $i = 0;
                                    ?>
                                    @endif
                                @endforeach
                            </div>
                            <div class="form-group mb-3 d-flex">
                                <div class="ms-auto">
                                    <a href="{{ route('dashboard') }}" class="text me-4">Cancelar</a>
                                    <button type="submit" class="btn btn-warning w-md">Guardar</button>
                                </div>
                            </div>
                          </x-admin-card>
                        </div>
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-900 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-white">
                  <x-header-title  :title="'Cambiar Contraseña'" subtitle="" :links="[]">
                  </x-header-title>
                  <x-admin-card>
                  <form method="POST" action="{{ route('password.store', ['user' => $user]) }}">
                    @csrf

                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Nueva Contraseña')" />
                        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <x-input-label for="password_confirmation" :value="__('Confirmar Contraseña Nueva')" />

                        <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                            type="password"
                                            name="password_confirmation" required autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    
                    <div class="form-group mb-3 d-flex">
                        <div class="ms-auto">
                            <a href="{{ route('dashboard') }}" class="text me-4">Cancelar</a>
                            <button type="submit" class="btn btn-warning w-md">Cambiar Contraseña</button>
                        </div>
                    </div>
                  </form>
                  </x-admin-card>
                </div>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-900 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-white">
                  <x-header-title  :title="'Eliminar cuenta'" subtitle="" :links="[]">
                  </x-header-title>
                  <x-admin-card>
                    <p>Asegúrese antes de apretar el botón. La operación no se puede revertir.</p>
                    <div class="form-group mb-3 d-flex">
                        <div class="ms-auto row">
                            <a href="{{ route('dashboard') }}" class="text me-4 col">Cancelar</a>
                            <form action="{{ route('users.destroy', $user) }}" method="POST" class="me-1 col"
                                data-confirm="¿Está seguro de eliminar el elemento seleccionado?">
                                @csrf
                                
                                <button type="submit" class="btn btn-danger btn-sm">
                                <img src="/pictures/icons/delete.png" width="15">
                                </button>
                            </form>
                        </div>
                    </div>
                  </x-admin-card>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>