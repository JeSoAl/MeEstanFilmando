<x-app-layout>
    <x-slot name="header">
      <div class="flex">
        <h2 class="font-semibold text-xl text-warning leading-tight flex">
            {{ __('Géneros') }}
        </h2>
        <div class="ms-auto flex" align="right">
          <a href="{{ route('admin.genres.create') }}" class="btn btn-sm btn-warning">Crear nuevo género</a>
        </div>
      </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-900 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-white">
                  @include('admin.genres.partials.search')

                  <div class="table-responsive">
                    <x-pagination :perPage="$request->input('per_page', 10)"></x-pagination>

                    <table class="table table-striped mb-0">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Género</th>
                          <th>Acciones</th>
                        </tr>
                      </thead>

                      <tbody>
                        @foreach ($genres as $genre)
                        <tr>
                          <td>{{ $genre->id ? $genre->id : '' }}</td>
                          <td>{{ $genre->name ? $genre->name : '' }}</td>
                          <td class="d-flex">
                            <a href="{{ route('admin.genres.edit', $genre) }}" class="btn btn-primary btn-sm me-1">
                              <img src="/pictures/icons/edit.png" width="15">
                            </a>
                            <form action="{{ route('admin.genres.destroy', $genre) }}" method="POST" class="me-1"
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
                  @if ($genres->links())
                    <div class="card-footer justify-content-center">
                      {{ $genres->appends(request()->query())->links() }}
                    </div>
                  @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
