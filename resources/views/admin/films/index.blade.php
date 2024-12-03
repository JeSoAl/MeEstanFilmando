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
                  @include('admin.films.partials.search')

                  <div class="table-responsive">
                    <x-pagination :perPage="$request->input('per_page', 10)"></x-pagination>

                    <table class="table table-striped mb-0">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Título</th>
                          <th>Título original</th>
                          <th>Director</th>
                          <th>Duración (min.)</th>
                          <th>Año</th>
                          <th>Acciones</th>
                        </tr>
                      </thead>

                      <tbody>
                        @foreach ($films as $film)
                        <tr>
                          <td>{{ $film->id ? $film->id : '' }}</td>
                          <td>{{ $film->title ? $film->title : '' }}</td>
                          <td>{{ $film->original ? $film->original : '' }}</td>
                          <td>{{ $film->director_id ? $film->director->name : '-' }}</td>
                          <td>{{ $film->duration ? $film->duration : '' }}</td>
                          <td>{{ $film->year ? $film->year : '' }}</td>
                          <td class="d-flex">
                            <a href="{{ route('admin.films.show', $film) }}" class="btn btn-warning btn-sm me-1">
                              <img src="/pictures/icons/plus.png" width="15">
                            </a>
                            <a href="{{ route('admin.films.edit', $film) }}" class="btn btn-primary btn-sm me-1">
                              <img src="/pictures/icons/edit.png" width="15">
                            </a>
                            <form action="{{ route('admin.films.destroy', $film) }}" method="POST" class="me-1"
                              data-confirm="¿Está seguro de eliminar el elemento seleccionado?">
                              @csrf

                              <button type="submit" class="btn btn-danger btn-sm">
                              <img src="/pictures/icons/delete.png" width="15">
                              </button>
                            </form>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                  @if ($films->links())
                    <div class="card-footer justify-content-center">
                      {{ $films->appends(request()->query())->links() }}
                    </div>
                  @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
