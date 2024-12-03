<?php

namespace App\Services;

use App\Models\Avatar;

class AvatarsService {

  /**
    * Function to search avatars by request 
    * @param Request $request
    **/ 
  public function search($request) {
    $avatars = Avatar::query();

    if ($request->has('description') && $request->description != '') {
      $avatars->where('description', 'like', '%' . $request->description . '%');
    }

    $avatars->orderByRaw($request->sort_by ?? 'avatars.id asc');

    return $avatars;
  }
}