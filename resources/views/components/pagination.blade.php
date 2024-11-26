<div class="d-flex mb-3">
  <div class="col-sm-3 col-md-2">
    <form class="d-flex form-row justify-center align-items-center ms-auto" id="pagination-form" method="GET">
      <label for="per_page" class="form-label mt-2 me-2">Mostrar </label>
      <select class="form-control per-page" name="per_page" id="per_page" onchange="document.getElementById('pagination-form').submit();">
        <option value="10" @selected($perPage == 10) >10</option>
        <option {{ $perPage == 25 ? 'selected' : '' }} value="25">25</option>
        <option {{ $perPage == 50 ? 'selected' : '' }} value="50">50</option>
        <option {{ $perPage == 100 ? 'selected' : '' }} value="100">100</option>
      </select>
    </form>
  </div>
</div>
