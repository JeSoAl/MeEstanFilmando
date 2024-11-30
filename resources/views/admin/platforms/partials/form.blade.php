<div class="form-group mb-3">
  <label for="name" class="form-label">Plataforma</label>
  <input class="form-control" type="text" id="name" name="name" value="{{ old('name') ?? $platform->name }}">
  <x-input-error :messages="$errors->get('name')" class="mt-2" />
</div>