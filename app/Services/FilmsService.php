<?php

namespace App\Services;

use App\Models\Film;

class FilmsService {
  /**
   * Return all films ordered by specific field & direction
   */
  public function getOptionsForSelect() {
    return Film::orderBy('position')->select('id', 'position')->get();
  }

  /**
    * Function to search films by request 
    * @param Request $request
    **/ 
  public function search($request) {
    $films = Film::query()->with(['director']);

    if ($request->has('name') && $request->name != '') {
      $films->where('name', 'like', '%' . $request->name . '%');
    }

    if ($request->has('original') && $request->original != '') {
      $films->where('original', 'like', '%' . $request->original . '%');
    }

    if ($request->has('position') && $request->position != '') {
      $films->where('position', 'like', '%' . $request->position . '%');
    }

    if ($request->has('year') && $request->year != '') {
      $films->where('year', $request->year);
    }

    $films->orderByRaw($request->sort_by ?? 'films.position desc');

    return $films;
  }
}