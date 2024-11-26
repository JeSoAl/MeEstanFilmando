<x-app-layout>
    <x-slot name="header">
      <div class="flex">
        <h2 class="font-semibold text-xl text-warning leading-tight flex">
            {{ __('Galardones') }}
        </h2>
        <div class="ms-auto flex" align="right">
          <a href="{{ route('admin.awards.create') }}" class="btn btn-sm btn-warning">Crear nuevo galardón</a>
        </div>
      </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-900 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-white">
                  @include('admin.awards.partials.search')

                  <div class="table-responsive">
                    <x-pagination :perPage="$request->input('per_page', 10)"></x-pagination>

                    <table class="table table-striped mb-0">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Galardón</th>
                          <th>Plural</th>
                          <th>Acciones</th>
                        </tr>
                      </thead>

                      <tbody>
                        @foreach ($awards as $award)
                        <tr>
                          <td>{{ $award->id ? $award->id : '' }}</td>
                          <td>{{ $award->type ? $award->type : '' }}</td>
                          <td>{{ $award->plural ? $award->plural : '' }}</td>
                          <td class="d-flex">
                            <a href="{{ route('admin.awards.edit', $award) }}" class="btn btn-primary btn-sm me-1">
                              <img src="/pictures/icons/edit.png" width="15">
                            </a>
                            <form action="{{ route('admin.awards.destroy', $award) }}" method="POST" class="me-1"
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
                  @if ($awards->links())
                    <div class="card-footer justify-content-center">
                      {{ $awards->appends(request()->query())->links() }}
                    </div>
                  @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
