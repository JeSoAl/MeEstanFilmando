
<div class="form-group mb-3">
  <label for="type" class="form-label">Galardón</label>
  <input class="form-control" type="text" id="type" name="type" value="{{ old('type') ?? $award->type }}">
  <x-input-error :messages="$errors->get('type')" class="mt-2" />
</div>
<div class="form-group mb-3">
  <label for="plural" class="form-label">Plural</label>
  <input class="form-control" type="text" id="plural" name="plural" value="{{ old('plural') ?? $award->plural }}">
  <x-input-error :messages="$errors->get('plural')" class="mt-2" />
</div>