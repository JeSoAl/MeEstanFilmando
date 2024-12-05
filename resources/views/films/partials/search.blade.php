<div class="d-flex mb-3 justify-content-center">
    <form class="search-form" action="{{ route('films.index') }}" method="GET">
      <div class="d-flex row justify-content-center align-items-center">
        <input type="hidden" name="per_page" value="{{ $request->input('per_page', 15) }}" />
        <input type="hidden" name="sort_by" value="{{ $request->input('sort_by', 'created_at asc') }}" />

        <div class="mx-2 col-12">
          <input type="text" name="title" id="title" class="form-control input-lg rounded-pill col-12" placeholder="Indique aquí la película" />
        </div>
      </div>
      <div class="d-flex row justify-content-center align-items-center">
        <input class="btn col-5 btn-warning text-center mt-2 mx-2 align-self-end rounded-pill" type="submit" value="Buscar" />
      </div>
    </form>
  </div>
  <hr />
