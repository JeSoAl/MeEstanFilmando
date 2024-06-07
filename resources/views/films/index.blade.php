@extends('layouts.admin')
@section('title') Estudiantes @endsection

@section('content')
<x-header-title title="Estudiantes" subtitle="Listado de estudiantes">
  <div class="ms-auto">
    <a href="{{ route('students.create') }}" class="btn btn-sm btn-success">Crear nuevo estudiante</a>
  </div>
</x-header-title>

<div class="card">
  <div class="card-body">
    @include('students.partials.search')

    <div class="table-responsive">
      <x-pagination :perPage="$request->input('per_page', 10)"></x-pagination>

      <table class="table table-striped mb-0">
        <thead>
          <tr>
            <th>
              <x-dropdown-order dropdown-text="ID" identifier="dropdownSortId"
                :sort-elements="[['sortText' => 'ID ascendente', 'sortBy' => 'id asc', 'sortOrder' => 'up'],
                                    ['sortText' => 'ID descendente', 'sortBy' => 'id desc', 'sortOrder' => 'down']]">
              </x-dropdown-order>
            </th>
            <th>
              <x-dropdown-order dropdown-text="Nombre Completo" identifier="dropdownSortName"
                :sort-elements="[['sortText' => 'Nombre ascendente', 'sortBy' => 'name asc', 'sortOrder' => 'up'],
                                   ['sortText' => 'Nombre descendente', 'sortBy' => 'name desc', 'sortOrder' => 'down']]">
              </x-dropdown-order>
            </th>
            <th>
              <x-dropdown-order dropdown-text="DNI" identifier="dropdownSortDNI"
                :sort-elements="[['sortText' => 'DNI ascendente', 'sortBy' => 'DNI asc', 'sortOrder' => 'up'],
                                   ['sortText' => 'DNI descendente', 'sortBy' => 'DNI desc', 'sortOrder' => 'down']]">
              </x-dropdown-order>
            </th>
            <th>
              <x-dropdown-order dropdown-text="SS" identifier="dropdownSortSS"
                :sort-elements="[['sortText' => 'SS ascendente', 'sortBy' => 'SS asc', 'sortOrder' => 'up'],
                                   ['sortText' => 'SS descendente', 'sortBy' => 'SS desc', 'sortOrder' => 'down']]">
              </x-dropdown-order>
            </th>
            <th>
              <x-dropdown-order dropdown-text="Teléfono fijo" identifier="dropdownSortPhone"
                :sort-elements="[['sortText' => 'Fijo ascendente', 'sortBy' => 'phone asc', 'sortOrder' => 'up'],
                                   ['sortText' => 'Fijo descendente', 'sortBy' => 'phone desc', 'sortOrder' => 'down']]">
              </x-dropdown-order>
            </th>
            <th>
              <x-dropdown-order dropdown-text="Teléfono móvil" identifier="dropdownSortMobilePhone"
                :sort-elements="[['sortText' => 'Móvil ascendente', 'sortBy' => 'mobile_phone asc', 'sortOrder' => 'up'],
                                   ['sortText' => 'Móvil descendente', 'sortBy' => 'mobile_phone desc', 'sortOrder' => 'down']]">
              </x-dropdown-order>
            </th>
            <th>
              <x-dropdown-order dropdown-text="Correo" identifier="dropdownSortMailId"
                :sort-elements="[['sortText' => 'Correo ascendente', 'sortBy' => 'mail_id asc', 'sortOrder' => 'up'],
                                   ['sortText' => 'Correo descendente', 'sortBy' => 'mail_id desc', 'sortOrder' => 'down']]">
              </x-dropdown-order>
            </th>
            <th>
              <x-dropdown-order dropdown-text="Contacto" identifier="dropdownSortContactModeId"
                :sort-elements="[['sortText' => 'Contacto ascendente', 'sortBy' => 'contact_mode_id asc', 'sortOrder' => 'up'],
                                   ['sortText' => 'Contacto descendente', 'sortBy' => 'contact_mode_id desc', 'sortOrder' => 'down']]">
              </x-dropdown-order>
            </th>
            <th>
              <x-dropdown-order dropdown-text="Dirección" identifier="dropdownSortAddress"
                :sort-elements="[['sortText' => 'Dirección ascendente', 'sortBy' => 'address asc', 'sortOrder' => 'up'],
                                   ['sortText' => 'Dirección descendente', 'sortBy' => 'address desc', 'sortOrder' => 'down']]">
              </x-dropdown-order>
            </th>
            <th>
              <x-dropdown-order dropdown-text="Fecha nacimiento" identifier="dropdownSortBirthdate"
                :sort-elements="[['sortText' => 'Fecha ascendente', 'sortBy' => 'birthdate asc', 'sortOrder' => 'up'],
                                   ['sortText' => 'Fecha descendente', 'sortBy' => 'birthdate desc', 'sortOrder' => 'down']]">
              </x-dropdown-order>
            </th>
            <th>Acciones</th>
          </tr>
        </thead>

        <tbody>
          @foreach ($students as $student)
          <tr>
            <td>{{ $student->id ? $student->id : '' }}</td>
            <td>{{ $student->name && $student->surname ? $student->name.' '.$student->surname : '' }}</td>
            <td>{{ $student->DNI ? $student->DNI : '' }}</td>
            <td>{{ $student->SS ? $student->SS : '' }}</td>
            <td>{{ $student->phone ? $student->phone : '' }}</td>
            <td>{{ $student->mobile_phone ? $student->mobile_phone : '' }}</td>
            <?php
                $mails = $student->mails()->get();
            ?>
            <td>@foreach ($mails as $mail)
                    @if($mail->student_id == $student->id)
                        -{{$mail->name}}<br>
                    @endif
                @endforeach
            </td>
            <td>{{ $student->contact_mode_id ? $student->contactMode->title : '' }}</td>
            <td>@if($student->address && $student->city && $student->region && $student->country)
                    {{$student->address}}, {{$student->city}}, {{$student->region}}, {{$student->country}}
                @endif
            </td>
            <td>{{ $student->birthdate->format('d/m/Y') ? $student->birthdate->format('d/m/Y') : '' }}</td>
            <td class="d-flex">
              <a href="{{ route('students.edit', $student) }}" class="btn btn-primary btn-sm me-1">
                <i class="fa fa-pencil-alt" aria-hidden="true"></i>
              </a>
              <form action="{{ route('students.destroy', $student) }}" method="POST" class="me-1"
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
