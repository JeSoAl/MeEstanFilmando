<?php

namespace App\Services;

use App\Models\Film;
use App\Models\Director;

class FilmsService {
  /**
   * Return all films ordered by specific field & direction
   */
  public function getOptionsForSelect() {
    return Film::orderBy('id')->select('id')->get();
  }

  /**
    * Function to search films by request 
    * @param Request $request
    **/ 
  public function search($request) {
    $films = Film::query()->with(['director']);

    if ($request->has('title') && $request->title != '') {
      $films->where('title', 'like', '%' . $request->title . '%');
    }

    if ($request->has('original') && $request->original != '') {
      $films->where('original', 'like', '%' . $request->original . '%');
    }

    if ($request->has('director') && $request->director != '') {
      $directors = Director::where('name', 'like', '%' . $request->director . '%');
      foreach ($directors as $director) {
        $films->where('director_id', $director->id);
      }
    }

    if ($request->has('year') && $request->year != '') {
      $films->where('year', $request->year);
    }

    $films->orderByRaw($request->sort_by ?? 'films.id asc');

    return $films;
  }
}