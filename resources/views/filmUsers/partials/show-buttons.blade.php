<div class="form-group mb-3 d-flex">
      <div class="ms-auto">
        <a href="{{ route('dashboard') }}" class="me-4"><button type="button" class="btn btn-warning w-md">Aceptar y volver</button></a>
        <form action="{{ route('filmUsers.destroy', $user) }}" method="POST" class="me-1">
          @csrf

          <button type="submit" class="btn btn-warning btn-sm">Ver en otro momento. Siguiente!</button>
        </form>
        <form action="{{ route('filmUsers.update', $user) }}" method="POST">
          @csrf
          @method('PUT')

          <button type="submit" class="btn btn-warning btn-sm">Ya la he visto!</button>
        </form>
      </div>
    </div>
</div>