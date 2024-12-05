<?php

namespace App\Services;

use App\Models\Comment;

class CommentsService {

  /**
    * Function to search comments by request 
    * @param Request $request
    **/ 
  public function search($request) {
    $comments = Comment::query()->with(['film', 'user', 'comment']);

    if ($request->has('content') && $request->content != '') {
      $comments->where('content', 'like', '%' . $request->content . '%');
    }

    if ($request->has('film_id') && $request->film_id != '') {
      $comments->where('film_id', $request->film_id);
    }

    if ($request->has('user_id') && $request->user_id != '') {
      $comments->where('user_id', $request->user_id);
    }

    $comments->orderByRaw($request->sort_by ?? 'comments.id asc');

    return $comments;
  }
}