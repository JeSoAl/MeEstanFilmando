<?php

namespace App\Http\Controllers;

use App\Models\FilmUser;
use App\Models\User;
use App\Models\Film;
use App\Models\Genre;
use App\Models\Actor;
use App\Models\Director;
use App\Models\Award;
use App\Models\Platform;
use App\Models\FilmActor;
use App\Models\FilmGenre;
use App\Models\FilmAward;
use App\Models\FilmPlatform;
use App\Models\UserGenre;
use App\Models\UserActor;
use App\Models\UserDirector;
use App\Models\UserPlatform;
use App\Http\Controllers\Controller;
use App\Http\Controllers\FilmController;
use Illuminate\Http\Request;

class FilmUserController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $directors = Director::all();
        $actors = Actor::all();
        $genres = Genre::all();
        $platforms = Platform::all();
        $filmUser = new FilmUser();
        return view('filmUsers.create', compact('filmUser', 'genres', 'actors', 'directors', 'platforms'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeFilters(Request $request, User $user)
    {
        $genres = Genre::all();
        $directors = Director::all();
        $actors = Actor::all();
        $platforms = Platform::all();

        // Iterar géneros
        foreach ($genres as $genre) {
            if ($request->input($genre->id .'radio') !== null) {
                if ($request->input($genre->id .'radio') == 'yes') {
                    $userGenre = new UserGenre();
                    $userGenre->user_id = $user->id;
                    $userGenre->genre_id = $genre->id;
                    $userGenre->type = true;
                    $userGenre->save();
                }
                else if ($request->input($genre->id . 'radio') == 'no') {
                    $userGenre = new UserGenre();
                    $userGenre->user_id = $user->id;
                    $userGenre->genre_id = $genre->id;
                    $userGenre->type = false;
                    $userGenre->save();
                }
            }
            else {
                if ($request->input($genre->id .'checkboxYes') !== null && $request->input($genre->id .'checkboxYes') == true) {
                    $userGenre = new UserGenre();
                    $userGenre->user_id = $user->id;
                    $userGenre->genre_id = $genre->id;
                    $userGenre->type = true;
                    $userGenre->save();
                }
                else if ($request->input($genre->id .'checkboxNo') !== null && $request->input($genre->id .'checkboxNo') == true) {
                    $userGenre = new UserGenre();
                    $userGenre->user_id = $user->id;
                    $userGenre->genre_id = $genre->id;
                    $userGenre->type = false;
                    $userGenre->save();
                }
            }
        }
        
        // Iterar plataformas
        foreach ($platforms as $platform) {
            if ($request->input($platform->id .'checkboxPlatform') !== null && $request->input($platform->id .'checkboxPlatform') == true) {
                $userPlatform = new UserPlatform();
                $userPlatform->user_id = $user->id;
                $userPlatform->platform_id = $platform->id;
                $userPlatform->save();
            }
        }

        // Iterar directores
        if ($request->input('trueDirectors')) {
            $directors = director::all();
            foreach ($request->input('trueDirectors') as $key => $value) {
                $director_id = -1;
                foreach ($directors as $director) {
                    if ($director->name == $value['director_name']) {
                        $director_id = $director->id;
                    }
                }
                if ($director_id >= 0) {
                    $userDirector = new UserDirector();
                    $userDirector->director_id = $director_id;
                    $userDirector->user_id = $user->id;
                    $userDirector->type = true;
                    $userDirector->save();
                }
            }
        }

        // Iterar directores
        if ($request->input('falseDirectors')) {
            $directors = director::all();
            foreach ($request->input('falseDirectors') as $key => $value) {
                $director_id = -1;
                foreach ($directors as $director) {
                    if ($director->name == $value['director_name']) {
                        $director_id = $director->id;
                    }
                }
                if ($director_id >= 0) {
                    $userDirector = new UserDirector();
                    $userDirector->director_id = $director_id;
                    $userDirector->user_id = $user->id;
                    $userDirector->type = false;
                    $userDirector->save();
                }
            }
        }

        // Iterar actores
        if ($request->input('trueActors')) {
            $actors = Actor::all();
            foreach ($request->input('trueActors') as $key => $value) {
                $actor_id = -1;
                foreach ($actors as $actor) {
                    if ($actor->name == $value['actor_name']) {
                        $actor_id = $actor->id;
                    }
                }
                if ($actor_id >= 0) {
                    $userActor = new UserActor();
                    $userActor->actor_id = $actor_id;
                    $userActor->user_id = $user->id;
                    $userActor->type = true;
                    $userActor->save();
                }
            }
        }

        // Iterar actores
        if ($request->input('falseActors')) {
            $actors = Actor::all();
            foreach ($request->input('falseActors') as $key => $value) {
                $actor_id = -1;
                foreach ($actors as $actor) {
                    if ($actor->name == $value['actor_name']) {
                        $actor_id = $actor->id;
                    }
                }
                if ($actor_id >= 0) {
                    $userActor = new UserActor();
                    $userActor->actor_id = $actor_id;
                    $userActor->user_id = $user->id;
                    $userActor->type = false;
                    $userActor->save();
                }
            }
        }
        
        $user->recomendation = true;
        $user->update();

        $films = $this->generate($user);

        $film = $films->random();

        $this->store($user, $film);

        return to_route('filmUsers.show', compact('user'));
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(User $user, Film $film)
    {
        $filmUser = new FilmUser();
        $filmUser->user_id = $user->id;
        $filmUser->film_id = $film->id;
        $filmUser->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        $array = $this->generate($user);
        $filmUsers = FilmUser::where('user_id', $user->id)->where('status', 'pinned');
        $filmUser = $filmUsers->first();
        $films = Film::where('id', $filmUser->film_id);
        $film = $films->first();
        return view('filmUsers.show', compact('film', 'array'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Film $film)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $filmUsers = FilmUser::where('user_id', $user->id)->where('status', 'pinned');
        $filmUser = $filmUsers->first();
        $filmUser->status = FilmUser::STATUS_DONTSHOW;
        $filmUser->update();
        
        $films = $this->generate($user);

        $film = $films->random();

        $this->store($user, $film);

        return to_route('filmUsers.show', compact('user'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $filmUsers = FilmUser::where('user_id', $user->id)->where('status', 'pinned');
        $filmUser = $filmUsers->first();
        $filmUser->delete();
        
        $films = $this->generate($user);

        $film = $films->random();

        $this->store($user, $film);

        return to_route('filmUsers.show', compact('user'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyAll(User $user)
    {
        $filmUsers = FilmUser::where('user_id', $user->id)->where('status', 'dontshow');
        foreach ($filmUsers as $filmUser) {
            $filmUser->delete();
        }
        $user->recomendation = false;
        $user->update();
        
        return to_route('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyFilters(User $user)
    {
        $filmUsers = FilmUser::where('user_id', $user->id)->where('status', 'pinned')->get();
        $filmUser = $filmUsers->first();
        $userGenres = UserGenre::all();
        $userPlatforms = UserPlatform::all();
        $userDirectors = UserDirector::all();
        $userActors = UserActor::all();

        // Eliminar filtrado
        $filmUser->delete();

        foreach ($userGenres as $userGenre) {
            if ($userGenre->user_id == $user->id) {
                $userGenre->delete();
            }
        }
        foreach ($userPlatforms as $userPlatform) {
            if ($userPlatform->user_id == $user->id) {
                $userPlatform->delete();
            }
        }
        foreach ($userDirectors as $userDirector) {
            if ($userDirector->user_id == $user->id) {
                $userDirector->delete();
            }
        }
        foreach ($userActors as $userActor) {
            if ($userActor->user_id == $user->id) {
                $userActor->delete();
            }
        }

        $directors = Director::all();
        $actors = Actor::all();
        $genres = Genre::all();
        $platforms = Platform::all();
        $filmUser = new FilmUser();
        return to_route('filmUsers.create', compact('filmUser', 'genres', 'actors', 'directors', 'platforms'));
    }

    // Generar lista de películas
    public function generate(User $user)
    {
        $filmUsers = FilmUser::where('user_id', $user->id)->get();
        $filmIds = [];
        $i = 0;
        foreach ($filmUsers as $filmUser) {
            if ($filmUser->status == 'dontshow') {
                $filmIds[$i] = $filmUser->film_id;
                $i++;
            }
        }
        $films = Film::whereNotIn('id', $filmIds)->where('cinema', 0);
        $userGenres = UserGenre::where('user_id', $user->id)->where('type', 'false')->get();
        foreach ($userGenres as $userGenre) {
            $films->whereHas('genres', function($query) use ($userGenre) { $query->where('id', '!=', $userGenre->genre_id); });
        }
        $films->get();
        $n = $films->count();
        if ($n === 0) {
            $films = Film::where('cinema', 0)->get();
        }
        return $films;
    }
}
