<?php

namespace App\Services;

use App\Models\Platform;

class PlatformsService {

  /**
    * Function to search platforms by request 
    * @param Request $request
    **/ 
  public function search($request) {
    $platforms = Platform::query();

    if ($request->has('name') && $request->name != '') {
      $platforms->where('name', 'like', '%' . $request->name . '%');
    }

    $platforms->orderByRaw($request->sort_by ?? 'platforms.id asc');

    return $platforms;
  }
}