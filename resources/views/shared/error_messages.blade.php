<div class="alert alert-danger" role="alert">
    <p class="mt-2 mb-2"><strong>Se han producido los siguientes errores:</strong></p>
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
