<?php

namespace App\Services;

use App\Models\Suscription;

class SuscriptionsService {

  /**
    * Function to search suscriptions by request 
    * @param Request $request
    **/ 
  public function search($request) {
    $suscriptions = Suscription::all();

    if ($request->has('description') && $request->description != '') {
      $suscriptions->where('description', 'like', '%' . $request->description . '%');
    }

    if ($request->has('price') && $request->price != '') {
      $suscriptions->where('price', $request->price);
    }

    if ($request->has('duration') && $request->duration != '') {
      $suscriptions->where('duration', $request->duration);
    }

    if ($request->has('type') && $request->type != '') {
      $suscriptions->where('type', 'like', '%' . $request->type . '%');
    }

    $suscriptions->orderByRaw($request->sort_by ?? 'suscriptions.id desc');

    return $suscriptions;
  }
}