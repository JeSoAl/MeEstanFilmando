
<div class="form-group mb-3">
  <label for="title" class="form-label">Título</label>
  <input class="form-control" type="text" id="title" name="title" value="{{ old('title') ?? $film->title }}">
  <x-input-error :messages="$errors->get('title')" class="mt-2" />
</div>
<div class="form-group mb-3">
  <label for="original" class="form-label">Título original</label>
  <input class="form-control" type="text" id="original" name="original" value="{{ old('original') ?? $film->original }}">
  <x-input-error :messages="$errors->get('original')" class="mt-2" />
</div>
<div class="form-group mb-3">
  <label for="duration" class="form-label">Duración (minutos)</label>
  <input class="form-control" type="number" id="duration" name="duration" value="{{ old('duration') ?? $film->duration }}">
  <x-input-error :messages="$errors->get('duration')" class="mt-2" />
</div>
<div class="form-group mb-3">
  <label for="year" class="form-label">Año</label>
  <input class="form-control" type="number" min="1900" max="2099" id="year" name="year" value="{{ old('year') ?? $film->year }}">
  <x-input-error :messages="$errors->get('year')" class="mt-2" />
</div>
@if ($view == "edit")
    @include('admin.films.partials.picture-edit')
@endif
<div class="form-group mb-3">
  <label for="director_id" class="form-label">Director</label>
  @if ($view == "edit")
    <input class="form-control" list="directors" name="director_id" value="{{ old('director_id') ?? $film->director->name }}">
  @else
    <input class="form-control" list="directors" name="director_id">
  @endif
  <datalist id="directors">
    @foreach ($directors as $director)
        <option value="{{ $director->name }}">
    @endforeach
  </datalist>
  <x-input-error :messages="$errors->get('director')" class="mt-2" />
</div>

<?php
    $genreCount = 0;
    $actorCount = 0;
    $platformCount = 0;
?>

<div id="genres">
    <label class="form-label">Géneros</label>
    <button type="button" class="btn btn-success w-s" onclick="addGenre()">
        <img src="/pictures/icons/plus.png" width="15">
    </button>
    @if ($view == "edit")
        @include('admin.films.partials.genre-edit')
    @endif
</div>

<div id="actors">
    <label class="form-label">Actores</label>
    <button type="button" class="btn btn-success w-s" onclick="addActor()">
        <img src="/pictures/icons/plus.png" width="15">
    </button>
    @if ($view == "edit")
        @include('admin.films.partials.actor-edit')
    @endif
</div>

<div id="platforms">
    <label class="form-label">Platafromas</label>
    <button type="button" class="btn btn-success w-s" onclick="addPlatform()">
        <img src="/pictures/icons/plus.png" width="15">
    </button>
    @if ($view == "edit")
        @include('admin.films.partials.platform-edit')
    @endif
</div>

<input type="hidden" id="genreCount" value="{{$genreCount}}">
<input type="hidden" id="actorCount" value="{{$actorCount}}">
<input type="hidden" id="platformCount" value="{{$platformCount}}">

<script>
    let totalGenres = 0;
    let totalActors = 0;
    let totalPlatforms = 0;
    var genres = document.querySelectorAll(".genre");
    var actors = document.querySelectorAll(".actor");
    var platforms = document.querySelectorAll(".platform");
    let genreCount = genres.length;
    let actorCount = actors.length;
    let platformCount = platforms.length;
    
    function addGenre() {
        const genreHTML = `<div class="form-group mb-3 genre" id="genre`+ genreCount +`">
                                <select class="form-control" name="genres[`+ genreCount +`][genre_id]">
                                    @foreach ($genres as $genre)
                                        <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                                    @endforeach
                                </select>
                                <button type="button" class="btn btn-danger w-s" onclick="deleteGenre(`+ genreCount +`)">
                                    <img src="/pictures/icons/delete.png" width="15">
                                </button>
                        </div>`;
        document.getElementById('genres').insertAdjacentHTML('beforeend', genreHTML);
        genreCount++;
    }

    function addActor() {
        const actorHTML = `<div class="form-group mb-3 actor" id="actor`+ actorCount +`">
                                <input class="form-control" list="actor_names" name="actors[`+ actorCount +`][actor_name]">
                                <datalist id="actor_names">
                                    @foreach ($actors as $actor)
                                        <option value="{{ $actor->name }}">
                                    @endforeach
                                </datalist>
                                <button type="button" class="btn btn-danger w-s" onclick="deleteActor(`+ actorCount +`)">
                                    <img src="/pictures/icons/delete.png" width="15">
                                </button>
                        </div>`;
        document.getElementById('actors').insertAdjacentHTML('beforeend', actorHTML);
        actorCount++;
    }
    
    function addPlatform() {
        const platformHTML = `<div class="form-group mb-3 platform" id="platform`+ platformCount +`">
                                <select class="form-control" name="platforms[`+ platformCount +`][platform_id]">
                                    @foreach ($platforms as $platform)
                                        <option value="{{ $platform->id }}">{{ $platform->name }}</option>
                                    @endforeach
                                </select>
                                <button type="button" class="btn btn-danger w-s" onclick="deletePlatform(`+ platformCount +`)">
                                    <img src="/pictures/icons/delete.png" width="15">
                                </button>
                        </div>`;
        document.getElementById('platforms').insertAdjacentHTML('beforeend', platformHTML);
        platformCount++;
    }

    function deleteGenre(genreCount) {
        let node = document.getElementById("genre"+genreCount);
        node.remove();
    }

    function deleteActor(actorCount) {
        let node = document.getElementById("actor"+actorCount);
        node.remove();
    }

    function deletePlatform(platformCount) {
        let node = document.getElementById("platform"+platformCount);
        node.remove();
    }
</script>