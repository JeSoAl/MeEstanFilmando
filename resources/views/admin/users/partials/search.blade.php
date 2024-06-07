<div class="d-flex mb-3">
    <form class="d-flex form-row align-items-center search-form" action="{{ route('admin.users.index') }}" method="GET">
      <input type="hidden" name="per_page" value="{{ $request->input('per_page', 10) }}" />
      <input type="hidden" name="sort_by" value="{{ $request->input('sort_by', 'created_at desc') }}" />

      <div class="form-group col-sm-12 col-md-5 mx-2">
        <label for="name" class="form-label">Nombre</label>
        <input type="text" name="name" id="name" class="form-control input-lg" />
      </div>

      <div class="form-group col-sm-12 col-md-5 mx-2">
        <label for="email" class="form-label">Correo</label>
        <input type="text" name="email" id="email" class="form-control input-lg" />
      </div>

        <div class="form-group col-md-5 mx-2">
            <label for="suscription" class="form-label">Suscripción</label>
            <select class="form-control chosen" id="suscription" name="suscription">
            <option value=''></option>
            <option value="1">Sí</option>
            <option value="0">No</option>
            </select>
        </div>

        <div class="form-group col-md-5 mx-2">
            <label for="admin" class="form-label">Administrador</label>
            <select class="form-control chosen" id="admin" name="admin">
            <option value='' ></option>
            <option value="1" >Sí</option>
            <option value="0" >No</option>
            </select>
        </div>

      <input class="btn col-sm-12 col-md-4 btn-success align-self-end col-md-5 mx-2" type="submit" value="Buscar" />
    </form>
  </div>
  <hr />
