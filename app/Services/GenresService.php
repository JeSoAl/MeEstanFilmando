<?php

namespace App\Services;

use App\Models\Genre;

class GenresService {

  /**
    * Function to search genres by request 
    * @param Request $request
    **/ 
  public function search($request) {
    $genres = Genre::query();

    if ($request->has('name') && $request->name != '') {
      $genres->where('name', 'like', '%' . $request->name . '%');
    }

    $genres->orderByRaw($request->sort_by ?? 'genres.id asc');

    return $genres;
  }
}