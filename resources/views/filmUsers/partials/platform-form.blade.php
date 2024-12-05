
    <div class="form-group mb-3">
    <label class="form-label">¿A qué plataformas de streaming tienes acceso?¿A todas ;p? Selecciona todas las opciones que quieras</label><br>
        <button type="button" class="btn btn-dark w-s" onclick="setPlatformsChecked()">
            <img src="/pictures/icons/check.png" width="10">
        </button>
        <label class="form-label text-grey-500">Seleccionar todas</label><br>
    @foreach ($platforms as $platform)
        <input class="platformCheck" type="checkbox" id="{{ $platform->id }}checkboxPlatform" name="{{ $platform->id }}checkboxPlatform" value="true">
        <label class="form-label" for="{{ $platform->id }}checkboxPlatform">{{ $platform->name }}</label><br>
    @endforeach
    </div>