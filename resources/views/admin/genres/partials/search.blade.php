<div class="d-flex mb-3">
    <form class="search-form" action="{{ route('admin.genres.index') }}" method="GET">
      <div class="d-flex form-row justify-between align-items-center">
        <input type="hidden" name="per_page" value="{{ $request->input('per_page', 10) }}" />
        <input type="hidden" name="sort_by" value="{{ $request->input('sort_by', 'created_at asc') }}" />

        <div class="form-group col-8 col-sm-10 col-md-11 col-lg-12 mx-2">
          <label for="name" class="form-label">Género</label>
          <input type="text" name="name" id="name" class="form-control input-lg" />
        </div>

        <input class="btn col-4 col-sm-5 col-md-6 col-lg-7 col-xl-8 btn-warning align-self-end text-center mx-2" type="submit" value="Buscar" />
      </div>
    </form>
  </div>
  <hr />
