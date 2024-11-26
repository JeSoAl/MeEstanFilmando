<div class="dropdown">
    <a class="dropdown-toggle" href="#" role="button" id="{{ $identifier }}" data-bs-toggle="dropdown" aria-expanded="false">
      {{ $dropdownText }} <i class="fa fa-chevron-down"></i>
    </a>

    <ul class="dropdown-menu">
      @foreach ($sortElements as $element)
        <li>
          <a class="dropdown-item sort-by" data-sort-by="{{ $element['sortBy'] }}">
            <i class="fa fa-arrow-{{ $element['sortOrder'] }}" aria-hidden="true"></i> {{ $element['sortText'] }}
          </a>
        </li>
      @endforeach
    </ul>
  </div>