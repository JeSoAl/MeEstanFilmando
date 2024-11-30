<?php

namespace App\Http\Controllers;

use App\Models\FilmUser;
use App\Models\Film;
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

class FilmController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $films = Film::all();
        $directors = Director::all();
        $actors = Actor::all();
        $genres = Genre::all();
        $awards = Award::all();
        $platforms = Platform::all();
        $filmUser = new FilmUser();
        return view('admin.films.create', compact('filmUser', 'films', 'genres', 'actors', 'awards', 'directors', 'platforms'));
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

        destroyFilters();

        // Iterar géneros
        foreach ($genres as $genre) {
            if ($request->input($genre->id .'radio') !== null) {
                if ($request->input($genre->id .'radio') == 'si') {
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
                    $usergenre->type = false;
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
        foreach ($directors as $director) {
            if ($request->input($director->id .'directorYes') !== null && $request->input($director->id .'directorYes') == true) {
                $userDirector = new UserDirector();
                $userDirector->user_id = $user->id;
                $userDirector->director_id = $director->id;
                $userDirector->type = true;
                $userDirector->save();
            }
            else if ($request->input($director->id .'directorNo') !== null && $request->input($director->id .'directorNo') == true) {
                $userDirector = new UserDirector();
                $userDirector->user_id = $user->id;
                $userDirector->director_id = $director->id;
                $userDirector->type = false;
                $userDirector->save();
            }
        }

        // Iterar actores
        foreach ($actors as $actor) {
            if ($request->input($actor->id .'actorYes') !== null && $request->input($actor->id .'actorYes') == true) {
                $userActor = new UserActor();
                $userActor->user_id = $user->id;
                $userActor->actor_id = $actor->id;
                $userActor->type = true;
                $userActor->save();
            }
            else if ($request->input($actor->id .'actorNo') !== null && $request->input($actor->id .'actorNo') == true) {
                $userActor = new UserActor();
                $userActor->user_id = $user->id;
                $userActor->actor_id = $actor->id;
                $userActor->type = false;
                $userActor->save();
            }
        }

        $films = generate($user);
        $i = 0;
        foreach ($films as $film) {
            $i++;
        }
        if ($i === 0) {
            $films = Film::all();
        }

        return to_route('admin.films.index', compact('films'));
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

        return to_route('admin.films.index');
    }
    /**
     * Display the specified resource.
     */
    public function show(FilmUser $filmUser)
    {
        $film = Film::where('id', $filmUser->film_id);
        $directors = Director::all();
        $actors = Actor::all();
        $genres = Genre::all();
        $awards = Award::all();
        $platforms = Platform::all();
        $filmGenres = $film->genres()->get();
        $filmActors = $film->actors()->get();
        $filmAwards = $film->awards()->get();
        $filmPlatforms = $film->platforms()->get();
        return view('filmsUsers.show', compact('filmUser', 'film', 'genres', 'actors', 'awards', 'directors', 'platforms', 'filmGenres', 'filmActors', 'filmAwards', 'filmPlatforms'));
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
    public function update(Request $request, FilmUser $filmUser, User $user)
    {
        $filmUser->status = FilmUser::STATUS_DONTSHOW;
        $filmUser->update();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FilmUser $filmUser)
    {
        $filmUser->delete();
        return to_route('admin.films.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyFilters()
    {
        $userGenres = UserGenre::all();
        $userPlatforms = UserPlatform::all();
        $userDirectors = UserDirector::all();
        $userActors = UserActor::all();

        // Eliminar filtrado
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
    }

    // Generar lista de películas
    public static function generate(User $user)
    {
        $films = Film::whereHas('genres', function($query) use ($user) { $query->whereIn('genre_id', $user->genre_ids()); }); 
        $filmUsers = FilmUser::where('user_id', $user->id)->where('status', 'dontshow');
        foreach ($filmUsers as $filmUser) {
            $films->where('id', '!=', $filmUser->film_id);
        }
        $userPlatforms = UserPlatform::where('user_id', $user->id);
        foreach ($userPlatforms as $userPlatform) {
            $films->whereHas('platforms', function($query) use ($user) { $query->where('id', $userPlatform->platform_id); });
        }
        $userGenres = UserGenre::where('user_id', $user->id)->where('type', 'false');
        foreach ($userGenres as $userGenre) {
            $films->whereHas('genres', function($query) use ($user) { $query->where('id', '!=', $userGenre->genre_id); });
        }
        $userGenres = UserGenre::where('user_id', $user->id)->where('type', 'true');
        foreach ($userGenres as $userGenre) {
            $films->whereHas('genres', function($query) use ($user) { $query->where('id', $userGenre->genre_id); });
        }
        $userDirectors = UserDirector::where('user_id', $user->id)->where('type', 'false');
        foreach ($userDirectors as $userDirector) {
            $films->where('director_id', '!=', $userDirector->director_id);
        }
        $userActors = UserActor::where('user_id', $user->id)->where('type', 'false');
        foreach ($userActors as $userActor) {
            $films->whereHas('actors', function($query) use ($user) { $query->where('id', '!=', $userActor->actor_id); });
        }
        $userDirectors = UserDirector::where('user_id', $user->id)->where('type', 'true');
        foreach ($userDirectors as $userDirector) {
            $films->where('director_id', $userDirector->director_id);
        }
        $userActors = UserActor::where('user_id', $user->id)->where('type', 'true');
        foreach ($userActors as $userActor) {
            $films->whereHas('actors', function($query) use ($user) { $query->where('id', $userActor->actor_id); });
        }
        $films->inRandomOrder()->get(); 
        return $films;
    }
}
