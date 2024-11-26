<div class="d-flex mb-3">
    <form class="search-form" action="{{ route('admin.users.index') }}" method="GET">
      <div class="d-flex form-row justify-between align-items-center">
        <input type="hidden" name="per_page" value="{{ $request->input('per_page', 10) }}" />
        <input type="hidden" name="sort_by" value="{{ $request->input('sort_by', 'created_at desc') }}" />

        <div class="form-group col-xs-2 col-md-4 col-lg-6 col-xl-7 mx-2">
          <label for="name" class="form-label">Nombre</label>
          <input type="text" name="name" id="name" class="form-control input-lg" />
        </div>

        <div class="form-group col-xs-2 col-md-5 col-lg-6 col-xl-7 mx-2">
          <label for="email" class="form-label">Correo</label>
          <input type="text" name="email" id="email" class="form-control input-lg" />
        </div>

        <div class="form-group col-xs-1 col-sm-2 col-lg-3 col-xl-4 mx-2">
            <label for="suscription" class="form-label">Suscripción</label>
            <select class="form-control chosen" id="suscription" name="suscription">
            <option value=''></option>
            <option value="1">Sí</option>
            <option value="0">No</option>
            </select>
        </div>

        <div class="form-group col-xs-1 col-sm-2 col-lg-3 col-xl-4 mx-2">
            <label for="admin" class="form-label">Admin</label>
            <select class="form-control chosen" id="admin" name="admin">
            <option value='' ></option>
            <option value="1" >Sí</option>
            <option value="0" >No</option>
            </select>
        </div>

      </div>
      <div class="d-flex form-row justify-between align-items-center">
        <input class="btn col-8 btn-warning text-center mx-2" type="submit" value="Buscar" />
      </div>
    </form>
  </div>
  <hr />
