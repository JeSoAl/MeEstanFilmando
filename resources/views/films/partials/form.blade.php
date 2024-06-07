{{ errorMessages($errors) }}

<div class="row">
    <div class="col-12 col-md-12">
      <x-admin-card>

        <div class="form-group mb-3">
            <label for="name" class="form-label">Nombre</label>
            <div id="name">
                <select class="chosen" name="type">
                    @foreach ($types as $type => $value)
                        <option value="{{ $value }}" {{ $value == $film->type ? 'selected="selected"' : '' }}>{{ $value }}</option>
                    @endforeach
                </select>
                <input type="text" class="form-control" name="name" value="{{ old('name') ?? $film->name }}">
            </div>
        </div>

        <div class="form-group mb-3">
            <label for="title" class="form-label">Título</label>
            <input class="form-control" type="text" id="title" name="title" value="{{ old('title') ?? $film->title }}" >
        </div>

        <div class="form-group mb-3">
            <label for="original" class="form-label">Título original</label>
            <input class="form-control" type="text" id="original" name="original" value="{{ old('original') ?? $film->original }}" >
        </div>

        <div class="form-group mb-3">
            <label for="description" class="form-label">Descripción</label>
            <input class="form-control" type="text" id="description" name="description" value="{{ old('description') ?? $film->description }}" >
        </div>

        <div class="form-group mb-3">
        <label for="duration" class="form-label">Duración</label>
        <input class="form-control" type="number" id="duration" name="duration" value="{{ old('duration') ?? $film->duration }}">
        </div>

        <div class="form-group mb-3">
        <label for="year" class="form-label">Año</label>
        <input class="form-control" type="number" min="1888" max="2099" step="1" id="year" name="year" value="{{ old('year') ?? $film->year }}">
        </div>

        <div class="form-check mb-3">
            <label for="noCall" class="form-label">No llamar</label>
            <input class="form-check-input" type="checkbox" id="noCall" name="noCall" value="true" {{ old('dontCall') ?? $film->dontCall == true ? 'checked' : '' }}>
        </div>

        <div class="form-group mb-3">
            <label for="mobile_phone" class="form-label">Móvil</label>
            <input class="form-control" type="number" id="mobile_phone" name="mobile_phone" value="{{ old('mobile_phone') ?? $film->mobile_phone }}">
        </div>

        <div class="form-group mb-3">
            <label for="phone" class="form-label">Télefono fijo</label>
            <input class="form-control" type="number" id="phone" name="phone" value="{{ old('phone') ?? $film->phone }}">
        </div>

        <?php
            $actorCount = 0;
            $awardCount = 0;
            $platformCount = 0;
        ?>

        <div id="actors">
            <label class="form-label">Actores</label>
            <button type="button" class="btn btn-success w-s" onclick="agregarActor()">
                <i class="fa fa-plus" aria-hidden="true"></i>
            </button>
            @if ($view == "edit")
                @include('films.partials.actor-edit')
            @endif
        </div>

        <div id="awards">
            <label class="form-label">Galardones</label>
            <button type="button" class="btn btn-success w-s" onclick="agregarGalardon()">
                <i class="fa fa-plus" aria-hidden="true"></i>
            </button>
            @if ($view == "edit")
                @include('films.partials.award-edit')
            @endif
        </div>

        <div id="platforms">
            <label class="form-label">Plataformas</label>
            <button type="button" class="btn btn-success w-s" onclick="agregarPlataforma()">
                <i class="fa fa-plus" aria-hidden="true"></i>
            </button>
            @if ($view == "edit")
                @include('films.partials.platform-edit')
            @endif
        </div>

        <input type="hidden" id="actorCount" value="{{$actorCount}}">
        <input type="hidden" id="awardCount" value="{{$awardCount}}">
        <input type="hidden" id="platformCount" value="{{$platformCount}}">

        <div class="form-group mb-3">
          <label for="contact_mode_id" class="form-label">Toma de contacto</label>
          <select class="form-control chosen" id="contact_mode_id" name="contact_mode_id">
            <option value='' {{ $film->contact_mode_id == null ? 'selected="selected"' : '' }}></option>
            @foreach ($contactModes as $contactMode)
              <option value="{{ $contactMode->id }}" {{ $film->contact_mode_id == $contactMode->id ? 'selected="selected"' : '' }}>{{ $contactMode->original }}</option>
            @endforeach
          </select>
        </div>

        <div class="form-group mb-3">
            <label for="data_dealer" class="form-label">Datos facilitados por:</label>
            <select class="form-control chosen" id="data_dealer" name="data_dealer" >
                <option value='' {{ $film->data_dealer == null ? 'selected="selected"' : '' }}></option>
                @foreach ($dataDealers as $dataDealer => $value)
                    <option value="{{ $value }}" {{ $value == $film->data_dealer ? 'selected' : '' }}>{{ $value }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group mb-3" id="publication">
          <label class="form-label">Actividad</label>
          <input class="form-control" type="text" name="activity" value="{{ old('activity') ?? ($film->activity ? $film->activity : '') }}">
        </div>

        <div class="form-group mb-3">
            <label for="SS" class="form-label">Seguridad Social</label>
            <input class="form-control" type="number" id="SS" name="SS" value="{{ old('SS') ?? $film->SS }}">
        </div>

        <div class="form-group mb-3">
          <label for="birthdate" class="form-label">Fecha de nacimiento</label>
          <input class="form-control" type="date" name="birthdate" id="birthdate" value="{{ old('birthdate') ?? ($film->birthdate ? $film->birthdate->format('Y-m-d') : '') }}">
        </div>

        <div class="form-group mb-3">
            <label for="address" class="form-label">Dirección</label>
            <input class="form-control" type="text" id="address" name="address" value="{{ old('address') ?? $film->address }}" >
        </div>

        <div class="form-group mb-3">
            <label for="city" class="form-label">Ciudad</label>
            <input class="form-control" type="text" id="city" name="city" value="{{ old('city') ?? $film->city }}" >
        </div>

        <div class="form-group mb-3">
            <label for="region" class="form-label">Provincia</label>
            <input class="form-control" type="text" id="region" name="region" value="{{ old('region') ?? $film->region }}" >
        </div>

        <div class="form-group mb-3">
            <label for="CP" class="form-label">Código postal</label>
            <input class="form-control" type="number" id="CP" name="CP" value="{{ old('CP') ?? $film->CP }}" >
        </div>

        <div class="form-group mb-3">
            <label for="country" class="form-label">País</label>
            <input class="form-control" type="text" id="country" name="country" value="{{ old('country') ?? $film->country }}" >
        </div>

        <div class="form-group mb-3">
            <label for="other_address" class="form-label">Dirección Alternativa</label>
            <input class="form-control" type="text" id="other_address" name="other_address" value="{{ old('other_address') ?? $film->other_address }}">
        </div>

        <div class="form-group mb-3">
            <label for="other_city" class="form-label">Ciudad Alternativa</label>
            <input class="form-control" type="text" id="other_city" name="other_city" value="{{ old('other_city') ?? $film->other_city }}">
        </div>

        <div class="form-group mb-3">
            <label for="other_region" class="form-label">Provincia Alternativa</label>
            <input class="form-control" type="text" id="other_region" name="other_region" value="{{ old('other_region') ?? $film->other_region }}">
        </div>

        <div class="form-group mb-3">
            <label for="other_CP" class="form-label">Código postal Alternativo</label>
            <input class="form-control" type="number" id="other_CP" name="other_CP" value="{{ old('other_CP') ?? $film->other_CP }}">
        </div>

        <div class="form-group mb-3">
            <label for="other_country" class="form-label">País Alternativo</label>
            <input class="form-control" type="text" id="other_country" name="other_country" value="{{ old('other_country') ?? $film->other_country }}">
        </div>

        <div class="form-group mb-3 d-flex">
            <div class="ms-auto">
            <a href="{{ route('films.index') }}" class="text me-4">Cancelar</a>
            <button type="submit" class="btn btn-primary w-md">Actualizar</button>
            </div>
        </div>
      </x-admin-card>
    </div>
</div>

<script>
    let totalactors = 0;
    let totalplatforms = 0;
    let totalplatforms = 0;
    let platformCount = document.getElementById("platformCount").value;
    function agregarplatform() {
        const platformHTML = `<div class="form-group mb-3 platform" id="platform`+ platformCount +`">
                            <x-admin-card>
                                <div class="form-group mb-3">
                                    <label for="name" class="form-label">Actor</label>
                                    <div id="name">
                                        <select class="chosen" name="actor">
                                            @foreach ($actors as $actor)
                                                <option value="{{ $actor->id }}" {{ $actor->id == $film->actors ? 'selected="selected"' : '' }}>{{ $actor->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </x-admin-card>
                        </div>`;
        document.getElementById('platforms').insertAdjacentHTML('beforeend', platformHTML);
        setChecked();
        platformCount++
    }

    function borrarplatform(id) {
        let node = document.getElementById(id);
        if (node.checked) {
            node.remove();
            document.querySelector(".platform").setAttribute("checked", "true");
        } else {
            node.remove();
        }
        setChecked();
    }

    function setChecked() {
        totalplatforms = document.getElementsByClassName("platform").length;
        if (totalplatforms == 1) {
            document.getElementById("mainplatform").setAttribute("checked", "true");
        }
    }
</script>
