@extends('layouts.app')
@section('title') Usuarios @endsection

@section('content')
<x-header-title title="Usuarios" subtitle="Listado de usuarios">
  <div class="ms-auto">
    <a href="{{ route('admin.users.create') }}" class="btn btn-sm btn-success">Crear nuevo usuario</a>
  </div>
</x-header-title>

<div class="card">
  <div class="card-body">
    @include('admin.users.partials.search')

    <div class="table-responsive">
      <x-pagination :perPage="$request->input('per_page', 10)"></x-pagination>

      <table class="table table-striped mb-0">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Suscripción</th>
            <th>Administrador</th>
            <th>Acciones</th>
          </tr>
        </thead>

        <tbody>
          @foreach ($users as $user)
          <tr>
            <td>{{ $user->id ? $user->id : '' }}</td>
            <td>{{ $user->name ? $user->name : '' }}</td>
            <td>{{ $user->email ? $user->email : '' }}</td>
            <td>{{ $user->suscription ? 'Sí' : 'No' }}</td>
            <td>{{ $user->admin ? 'Sí' : 'No' }}</td>
            <td class="d-flex">
              <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-primary btn-sm me-1">
                <i class="fa fa-pencil-alt" aria-hidden="true"></i>
              </a>
              <form action="{{ route('admin.users.destroy', $user) }}" method="POST" class="me-1"
                data-confirm="¿Está seguro de eliminar el elemento seleccionado?">
                @csrf

                <button type="submit" class="btn btn-danger btn-sm">
                  <i class="fa fa-trash-alt" aria-hidden="true"></i>
                </button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
@endsection
