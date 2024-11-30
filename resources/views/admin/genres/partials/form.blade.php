<div class="form-group mb-3">
  <label for="name" class="form-label">Nombre</label>
  <input class="form-control" type="text" id="name" name="name" value="{{ old('name') ?? $genre->name }}">
  <x-input-error :messages="$errors->get('name')" class="mt-2" />
</div>