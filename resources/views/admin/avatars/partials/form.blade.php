<div class="form-group mb-3">
  <label for="description" class="form-label">Descripción</label>
  <input class="form-control" type="text" id="description" name="description" value="{{ old('description') ?? $avatar->description }}">
  <x-input-error :messages="$errors->get('type')" class="mt-2" />
</div>
<div class="form-group mb-3">
  <label for="picture" class="form-label">Ruta</label>
  <input class="form-control" type="text" id="picture" name="picture" value="{{ old('picture') ?? $avatar->picture }}">
  <x-input-error :messages="$errors->get('picture')" class="mt-2" />
</div>