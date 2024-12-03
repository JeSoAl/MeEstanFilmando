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
                    <div class="col">
                      <p class="display-3 text-warning">Título:</p>
                      <p class="display-3">{{ $film->title }}</p>
                      <br>
                      <p class="display-6 text-warning">Título original:</p>
                      <p class="display-6">{{ $film->original }}</p>
                      <br>
                      <p class="display-6"><span class="text-warning">Duración: </span>{{ $film->duration }} minutos</p>
                      <br>
                      <p class="display-6"><span class="text-warning">Año: </span>{{ $film->year }}</p>
                      <br>
                      <p class="display-6"><span class="text-warning">Director: </span>{{ $film->director->name }}</p>
                      <br>
                      <p class="h4"><span class="text-warning">Actores: </span>
                          <?php
                              $i = 0;
                          ?>
                          @foreach ($film->actors as $actor)
                              @if ($i == 0)
                                  {{$actor->name}}
                              @else
                                  , {{$actor->name}}
                              @endif
                              <?php
                                  $i++;
                              ?>
                          @endforeach
                          @if ($i == 0)
                              -
                          @endif
                      </p>
                      <p class="h4"><span class="text-warning">Géneros: </span>
                          <?php
                              $i = 0;
                          ?>
                          @foreach ($film->genres as $genre)
                              @if ($i == 0)
                                  {{$genre->name}}
                              @else
                                  , {{$genre->name}}
                              @endif
                              <?php
                                  $i++;
                              ?>
                          @endforeach
                          @if ($i == 0)
                              -
                          @endif
                      </p>
                      <p class="h4"><span class="text-warning">¿Dónde ver?: </span>
                          <?php
                              $i = 0;
                          ?>
                          @foreach ($film->platforms as $platform)
                              @if ($i == 0)
                                  {{$platform->name}}
                              @else
                                  , {{$platform->name}}
                              @endif
                              <?php
                                  $i++;
                              ?>
                          @endforeach
                          @if ($i == 0)
                              -
                          @endif
                      </p>
                    </div>
                  <div class="col-6 col-xl-5">
                      <img src="{{ $film->picture }}" class="w-auto">
                  </div>
                  </div><div class="form-group mb-3 d-flex">
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