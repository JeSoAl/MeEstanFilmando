<?php

namespace App\Services;

use App\Models\User;

class UsersService {

  /**
    * Function to search users by request 
    * @param Request $request
    **/ 
  public function search($request) {
    $users = User::query()->with(['avatar', 'suscription']);

    if ($request->has('name') && $request->name != '') {
      $users->where('name', 'like', '%' . $request->name . '%');
    }

    if ($request->has('email') && $request->email != '') {
      $users->where('email', 'like', '%' . $request->email . '%');
    }

    if ($request->has('suscription') && $request->suscription != '') {
      $users->where('suscription', $request->suscription);
    }

    if ($request->has('recomendation') && $request->recomendation != '') {
      $users->where('recomendation', $request->recomendation);
    }

    if ($request->has('admin') && $request->admin != '') {
      $users->where('admin', $request->admin);
    }

    if ($request->has('avatar_id') && $request->avatar_id != '') {
      $users->where('avatar_id', $request->avatar_id);
    }

    if ($request->has('suscription_id') && $request->suscription_id != '') {
      $users->where('suscription_id', $request->suscription_id);
    }

    $users->orderByRaw($request->sort_by ?? 'users.id desc');

    return $users;
  }
}