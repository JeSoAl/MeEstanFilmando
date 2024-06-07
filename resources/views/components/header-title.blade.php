<div class="page-title-box d-sm-flex align-items-center justify-content-between">
    <div>
      <h4 class="card-title">{{ $title }}</h4>
      @if ($subtitle)
        <p class="card-title-desc">{{ $subtitle }}</p>
      @endif
    </div>

    {{ $slot }}
  </div>
