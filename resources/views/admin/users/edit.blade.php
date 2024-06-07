@extends('layouts.app')

@section('title') Editar usuario {{ $user->id }} @endsection
@section('content-header') Editar usuario {{ $user->id }} @endsection

@section('content')
  <x-header-title  :title="'Editar usuario ' . $user->title" subtitle="Modificar los datos del usuario seleccionada" :links="[]">
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
                <option value='' {{ $user->suscription == null ? 'selected="selected"' : '' }}></option>
                <option value="true" {{ $user->suscription == true ? 'selected="selected"' : '' }}>Sí</option>
                <option value="false" {{ $user->suscription == false ? 'selected="selected"' : '' }}>No</option>
                </select>
            </div>

            <div class="form-group mb-3">
                <label for="admin" class="form-label">Administrador</label>
                <select class="form-control chosen" id="admin" name="admin">
                <option value='' {{ $user->admin == null ? 'selected="selected"' : '' }}></option>
                <option value="true" {{ $user->admin == true ? 'selected="selected"' : '' }}>Sí</option>
                <option value="false" {{ $user->admin == false ? 'selected="selected"' : '' }}>No</option>
                </select>
            </div>

            @include('admin.users.partials.buttons')
          </x-admin-card>
        </div>
    </div>
  </form>
@endsection
