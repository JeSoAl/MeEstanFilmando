<div class="">
      <div class="ms-auto row">
        <div class="col d-flex justify-content-start align-self-end">
        <a href="{{ route('dashboard') }}" class="me-4"><button type="button" class="btn btn-warning w-md">Aceptar y volver</button></a>
        </div>
        <div class="col d-flex justify-content-center align-self-end">
        <form action="{{ route('filmUsers.destroy', $user) }}" method="POST" class="me-1">
          @csrf

          <button type="submit" class="btn btn-warning btn-sm">Ver en otro momento. Siguiente!</button>
        </form>
        </div>
        <div class="col d-flex justify-content-end align-self-end">
        <form action="{{ route('filmUsers.update', $user) }}" method="POST">
          @csrf
          @method('PUT')

          <button type="submit" class="btn btn-warning btn-sm">Ya la he visto!</button>
        </form>
      </div>
    </div>
</div>