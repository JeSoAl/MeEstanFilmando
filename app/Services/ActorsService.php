<?php

namespace App\Services;

use App\Models\Actor;

class ActorsService {

  /**
    * Function to search actors by request 
    * @param Request $request
    **/ 
  public function search($request) {
    $actors = Actor::all();

    if ($request->has('name') && $request->name != '') {
      $actors->where('name', 'like', '%' . $request->name . '%');
    }

    if ($request->has('country') && $request->country != '') {
      $actors->where('country', 'like', '%' . $request->country . '%');
    }

    $actors->orderByRaw($request->sort_by ?? 'actors.id desc');

    return $actors;
  }
}