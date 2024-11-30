<div class="d-flex mb-3">
    <form class="search-form" action="{{ route('admin.actors.index') }}" method="GET">
      <div class="d-flex form-row justify-between align-items-center">
        <input type="hidden" name="per_page" value="{{ $request->input('per_page', 10) }}" />
        <input type="hidden" name="sort_by" value="{{ $request->input('sort_by', 'created_at asc') }}" />

        <div class="form-group col-5 col-sm-7 col-md-9 col-lg-12 mx-2">
          <label for="name" class="form-label">Nombre</label>
          <input type="text" name="name" id="name" class="form-control input-lg" />
        </div>

        <div class="form-group col-5 col-sm-7 col-md-9 col-lg-12 mx-2">
            <label for="country" class="form-label">País</label>
            <input type="text" name="country" id="country" class="form-control input-lg" />
        </div>

        </div>
        <div class="d-flex form-row justify-between align-items-center">
          <input class="btn col-9 col-md-10 col-lg-11 btn-warning text-center mx-2" type="submit" value="Buscar" />
        </div>
    </form>
  </div>
  <hr />
