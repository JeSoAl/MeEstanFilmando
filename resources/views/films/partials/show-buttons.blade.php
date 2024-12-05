<div class="">
      <div class="ms-auto row">
        <div class="col d-flex justify-content-start align-self-end">
        <form action="{{ route('films.destroy', $quickUser) }}" method="POST" class="me-1">
          @csrf

          <button type="submit" class="btn btn-warning btn-sm">Aceptar y volver</button>
        </form>
        </div>
        <div class="col d-flex justify-content-end align-self-end">
        <a href="{{ route('films.show', $quickUser) }}" class="me-4"><button type="button" class="btn btn-warning w-md">Otra!</button></a>
        </div>
    </div>
</div>