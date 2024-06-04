<?php

namespace App\Services;

use App\Models\Award;

class AwardsService {

  /**
    * Function to search awards by request 
    * @param Request $request
    **/ 
  public function search($request) {
    $awards = Award::all();

    if ($request->has('type') && $request->type != '') {
      $awards->where('type', 'like', '%' . $request->type . '%');
    }

    $awards->orderByRaw($request->sort_by ?? 'awards.id desc');

    return $awards;
  }
}