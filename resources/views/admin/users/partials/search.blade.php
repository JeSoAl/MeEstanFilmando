<div class="d-flex mb-3">
    <form class="search-form" action="{{ route('admin.users.index') }}" method="GET">
      <div class="d-flex form-row justify-between align-items-center">
        <input type="hidden" name="per_page" value="{{ $request->input('per_page', 10) }}" />
        <input type="hidden" name="sort_by" value="{{ $request->input('sort_by', 'created_at desc') }}" />

        <div class="form-group col-5 col-sm-7 col-md-9 col-lg-11 col-xl-12 mx-2">
          <label for="name" class="form-label">Nombre</label>
          <input type="text" name="name" id="name" class="form-control input-lg" />
        </div>

        <div class="form-group col-5 col-sm-7 col-md-9 col-lg-11 col-xl-12 mx-2">
          <label for="email" class="form-label">Correo</label>
          <input type="text" name="email" id="email" class="form-control input-lg" />
        </div>

      </div>
      <div class="d-flex form-row justify-between align-items-center">
        <div class="form-group col-3 col-sm-4 col-md-5 col-lg-7 col-xl-8 mx-2">
            <label for="recomendation" class="form-label">Recomendación</label>
            <select class="form-control chosen" id="recomendation" name="recomendation">
            <option value=''></option>
            <option value="1">Sí</option>
            <option value="0">No</option>
            </select>
        </div>

        <input class="btn col-5 col-md-6 col-lg-7 col-lg-8 btn-warning text-center mx-2 align-self-end" type="submit" value="Buscar" />

        <div class="form-group col-3 col-sm-4 col-md-5 col-lg-7 col-xl-8 mx-2">
            <label for="admin" class="form-label">Admin</label>
            <select class="form-control chosen" id="admin" name="admin">
            <option value='' ></option>
            <option value="1" >Sí</option>
            <option value="0" >No</option>
            </select>
        </div>
      </div>
    </form>
  </div>
  <hr />
