@extends('layouts.admin')

@section('title') Crear nuevo usuario @endsection
@section('content-header') Crear usuario @endsection

@section('content')
  <x-header-title title="Nuevo usuario" subtitle=""></x-header-title>

  <form action="{{ route('admin.users.store') }}" method="POST">
    @csrf

    {{ errorMessages($errors) }}

    <div class="row">
        <div class="col-12 col-md-12">
          <x-admin-card>
            @include('users.partials.form')

            <div class="form-group mb-3">
              <label for="password" class="form-label">Contraseña</label>
              <input class="form-control" type="password" id="password" name="password">
            </div>

            <div class="form-group mb-3">
              <label for="password_confirmation" class="form-label">Confirmar Contraseña</label>
              <input id="password_confirmation" type="password" class="form-control" name="password_confirmation">
            </div>

            @include('users.partials.buttons')
          </x-admin-card>
        </div>
    </div>

  </form>

@endsection
