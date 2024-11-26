
<div class="form-group mb-3">
  <label for="name" class="form-label">Nombre</label>
  <input class="form-control" type="text" id="name" name="name" value="{{ old('name') ?? $user->name }}">
  <x-input-error :messages="$errors->get('name')" class="mt-2" />
</div>

<div class="form-group mb-3">
  <label for="email" class="form-label">Correo</label>
  <input class="form-control" type="text" id="email" name="email" value="{{ old('email') ?? $user->email }}">
  <x-input-error :messages="$errors->get('email')" class="mt-2" />
</div>