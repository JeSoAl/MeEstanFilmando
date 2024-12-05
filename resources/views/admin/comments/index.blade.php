<x-app-layout>
    <x-slot name="header">
      <div class="flex">
        <h2 class="font-semibold text-xl text-warning leading-tight flex">
            {{ __('Opiniones') }}
        </h2>
        <div class="ms-auto flex" align="right">
          <a href="{{ route('admin.comments.create') }}" class="btn btn-sm btn-warning">Crear nuevo galardón</a>
        </div>
      </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-900 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-white">
                  @include('admin.comments.partials.search')

                  <div class="table-responsive">
                    <x-pagination :perPage="$request->input('per_page', 10)"></x-pagination>

                    <table class="table table-striped mb-0">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Usuario</th>
                          <th>Película</th>
                          <th>Borrar</th>
                        </tr>
                      </thead>

                      <tbody>
                        @foreach ($comments as $comment)
                        <tr>
                          <td>{{ $comment->id ? $comment->id : '' }}</td>
                          <td>{{ $comment->user_id ? $comment->user->name : '' }}</td>
                          <td>{{ $comment->film_id ? $comment->film->title : '' }}</td>
                          <td class="d-flex">
                            <form action="{{ route('admin.comments.destroy', $comment) }}" method="POST" class="me-1"
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
                  @if ($comments->links())
                    <div class="card-footer justify-content-center">
                      {{ $comments->appends(request()->query())->links() }}
                    </div>
                  @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
