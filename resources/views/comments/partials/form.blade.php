<div class="form-group mb-3 row justify-content-between">
  <div class="col-9">
    <label for="content" class="form-label">Escribe aquí tu opinión sobre la película</label>
    <input class="form-control" type="text" id="content" name="content">
  </div>
  <input type="hidden" name="user_id" value="{{$user->id}}">
  <input type="hidden" name="film_id" value="{{$film->id}}">
  <div class="col-3 align-self-end">
    <button type="submit" class="btn btn-warning w-md">Subir</button>
  </div>
  <div class="col-12 align-self-end">
    <a href="{{ route('films.index') }}" class="text me-4 text-warning">Volver</a>
  </div>
</div>