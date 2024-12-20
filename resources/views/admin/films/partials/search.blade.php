<div class="d-flex mb-3">
    <form class="search-form" action="{{ route('admin.films.index') }}" method="GET">
      <div class="d-flex form-row justify-between align-items-center">
        <input type="hidden" name="per_page" value="{{ $request->input('per_page', 10) }}" />
        <input type="hidden" name="sort_by" value="{{ $request->input('sort_by', 'created_at desc') }}" />

        <div class="form-group col-xs-2 col-sm-3 col-md-4 col-lg-6 col-xl-7 mx-2">
          <label for="title" class="form-label">Título</label>
          <input type="text" name="title" id="title" class="form-control input-lg" />
        </div>

        <div class="form-group col-xs-2 col-sm-3 col-md-4 col-lg-5 col-xl-7 mx-2">
            <label for="original" class="form-label">Título original</label>
            <input type="text" name="original" id="original" class="form-control input-lg" />
        </div>

        <div class="form-group col-xs-2 col-sm-3 col-md-4 col-lg-5 col-xl-6 mx-2">
            <label for="duration" class="form-label">Duración (min.)</label>
            <input type="number" name="duration" id="duration" class="form-control input-lg" />
        </div>

      </div>
      <div class="d-flex form-row justify-between align-items-center">
        <div class="form-group col-3 col-sm-3 col-md-4 col-lg-6 col-xl-7 mx-2">
            <label for="director" class="form-label">Director</label>
            <input type="text" name="director" id="director" class="form-control input-lg" />
        </div>

        <div class="form-group col-3 col-sm-3 col-md-4 col-lg-5 col-xl-6 mx-2">
            <label for="year" class="form-label">Año</label>
            <input type="number" min="1900" max="2099" name="year" id="year" class="form-control input-lg" />
        </div>

        <input class="btn col-3 col-sm-3 col-md-4 col-lg-5 col-xl-7 btn-warning text-center mx-2 align-self-end" type="submit" value="Buscar" />
      </div>
    </form>
  </div>
  <hr />
