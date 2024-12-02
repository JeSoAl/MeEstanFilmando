<div class="form-group mb-3">
  <label for="picture" class="form-label">Imagen</label>
  <input class="form-control" type="text" id="picture" name="picture" value="{{ old('picture') ?? $film->picture }}">
  <x-input-error :messages="$errors->get('picture')" class="mt-2" />
</div>