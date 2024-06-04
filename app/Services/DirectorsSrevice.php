<?php

namespace App\Services;

use App\Models\Director;

class DirectorsService {

  /**
    * Function to search directors by request 
    * @param Request $request
    **/ 
  public function search($request) {
    $directors = Director::all();

    if ($request->has('name') && $request->name != '') {
      $directors->where('name', 'like', '%' . $request->name . '%');
    }

    if ($request->has('country') && $request->country != '') {
      $directors->where('country', 'like', '%' . $request->country . '%');
    }

    $directors->orderByRaw($request->sort_by ?? 'directors.id desc');

    return $directors;
  }
}