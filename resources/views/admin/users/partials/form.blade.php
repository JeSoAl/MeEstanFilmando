
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

<div class="form-group mb-3">
  <label class="form-label">Avatar</label><br>
  <?php
    $i = 0;
  ?>
  @foreach ($avatars as $avatar)
    @if ($i == 0)
      <div class="row">
    @endif
    <div class="col">
      @if ($user->avatar_id == $avatar->id)
        <input type="radio" id="avatar{{$avatar->id}}" name="avatar_id" value="{{$avatar->id}}" checked>
      @else
        <input type="radio" id="avatar{{$avatar->id}}" name="avatar_id" value="{{$avatar->id}}">
      @endif
      <label class="form-label" for="avatar{{$avatar->id}}"><img src="{{$avatar->picture}}" width="300"></label><br>
    </div>
    <?php
      $i++;
    ?>
    @if ($i == 2)
      </div>
      <?php
        $i = 0;
      ?>
    @endif
  @endforeach
</div>