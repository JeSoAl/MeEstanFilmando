
<div class="form-group mb-3">
  <label for="name" class="form-label">Nombre</label>
  <input class="form-control" type="text" id="name" name="name" value="{{ old('name') ?? $director->name }}">
  <x-input-error :messages="$errors->get('name')" class="mt-2" />
</div>
<div class="form-group mb-3">
  <label for="country" class="form-label">País</label>
  <input class="form-control" type="text" id="country" name="country" value="{{ old('country') ?? $director->country }}">
  <x-input-error :messages="$errors->get('country')" class="mt-2" />
</div>
<div class="form-group mb-3">
  <label for="birthdate" class="form-label">Fecha</label>
  <input class="form-control" type="date" id="birthdate" name="birthdate" value="{{ old('birthdate', date('Y-m-d')) ?? $director->birthdate }}">
  <x-input-error :messages="$errors->get('birthdate')" class="mt-2" />
</div>