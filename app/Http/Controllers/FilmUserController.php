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
        
        $this->destroyFilters($user);

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

        $wrongGenres1 = UserGenre::where('user_id', $user->id)->where('genre_id', 1)->where('type', false)->get();
        $wrongGenres2 = UserGenre::where('user_id', $user->id)->where('genre_id', 2)->where('type', false)->get();
        $wrongGenres3 = UserGenre::where('user_id', $user->id)->where('genre_id', 3)->where('type', false)->get();
        $spanish = $wrongGenres1->count();
        $international = $wrongGenres2->count();
        $hollywood = $wrongGenres3->count();
        if ($spanish >= 1 && $international >= 1 && $hollywood >= 1) {
            $wrongGenre1 = $wrongGenres1->first();
            $wrongGenre2 = $wrongGenres2->first();
            $wrongGenre3 = $wrongGenres3->first();
            $wrongGenre1->delete();
            $wrongGenre2->delete();
            $wrongGenre3->delete();
        }

        $wrongGenres1 = UserGenre::where('user_id', $user->id)->where('genre_id', 18)->where('type', false)->get();
        $wrongGenres2 = UserGenre::where('user_id', $user->id)->where('genre_id', 28)->where('type', false)->get();
        $classic = $wrongGenres1->count();
        $experimental = $wrongGenres2->count();
        if ($classic >= 1 && $experimental >= 1) {
            $wrongGenre1 = $wrongGenres1->first();
            $wrongGenre2 = $wrongGenres2->first();
            $wrongGenre1->delete();
            $wrongGenre2->delete();
        }

        $wrongGenres1 = UserGenre::where('user_id', $user->id)->where('genre_id', 21)->where('type', false)->get();
        $wrongGenres2 = UserGenre::where('user_id', $user->id)->where('genre_id', 22)->where('type', false)->get();
        $wrongGenres3 = UserGenre::where('user_id', $user->id)->where('genre_id', 23)->where('type', false)->get();
        $wrongGenres4 = UserGenre::where('user_id', $user->id)->where('genre_id', 24)->where('type', false)->get();
        $wrongGenres5 = UserGenre::where('user_id', $user->id)->where('genre_id', 25)->where('type', false)->get();
        $wrongGenres6 = UserGenre::where('user_id', $user->id)->where('genre_id', 32)->where('type', false)->get();
        $ancient = $wrongGenres1->count();
        $medieval = $wrongGenres2->count();
        $modern = $wrongGenres3->count();
        $present = $wrongGenres4->count();
        $future = $wrongGenres5->count();
        $atemporal = $wrongGenres6->count();
        if ($ancient >= 1 && $medieval >= 1 && $modern >= 1 && $present >= 1 && $future >= 1 && $atemporal >= 1) {
            $wrongGenre1 = $wrongGenres1->first();
            $wrongGenre2 = $wrongGenres2->first();
            $wrongGenre3 = $wrongGenres3->first();
            $wrongGenre4 = $wrongGenres4->first();
            $wrongGenre5 = $wrongGenres5->first();
            $wrongGenre6 = $wrongGenres6->first();
            $wrongGenre1->delete();
            $wrongGenre2->delete();
            $wrongGenre3->delete();
            $wrongGenre4->delete();
            $wrongGenre5->delete();
            $wrongGenre6->delete();
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
        $filmUsers = FilmUser::where('user_id', $user->id)->where('status', 'dontshow')->get();
        foreach ($filmUsers as $filmUser) {
            $filmUser->delete();
        }
        
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
        if ($filmUser != null) {
            $filmUser->delete();
        }

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
        $userGenres = UserGenre::where('user_id', $user->id)->get();
        $filmGenres = FilmGenre::all();
        $genreIds = [];
        $i = 0;
        foreach ($filmGenres as $filmGenre) {
            foreach ($userGenres as $userGenre) {
                if ($userGenre->type == false && $userGenre->genre_id == $filmGenre->genre_id) {
                    $genreIds[$i] = $filmGenre->film_id;
                    $i++;
                }
            }
        }
        $userActors = UserActor::where('user_id', $user->id)->get();
        $filmActors = FilmActor::all();
        $actorIds = [];
        $i = 0;
        foreach ($filmActors as $filmActor) {
            foreach ($userActors as $userActor) {
                if ($userActor->type == false && $userActor->actor_id == $filmActor->actor_id) {
                    $actorIds[$i] = $filmActor->film_id;
                    $i++;
                }
            }
        }
        $userDirectors = UserDirector::where('user_id', $user->id)->get();
        $filmDirectors = Film::all();
        $directorIds = [];
        $i = 0;
        foreach ($filmDirectors as $filmDirector) {
            foreach ($userDirectors as $userDirector) {
                if ($userDirector->type == false && $userDirector->director_id == $filmDirector->director_id) {
                    $directorIds[$i] = $filmDirector->id;
                    $i++;
                }
            }
        }
        $films = Film::whereNotIn('id', $filmIds)->whereNotIn('id', $genreIds)->whereNotIn('id', $actorIds)->whereNotIn('id', $directorIds)->where('cinema', 0)->get();
        $n = $films->count();
        if ($n === 0) {
            $films = Film::whereNotIn('id', $filmIds)->where('cinema', 0)->get();
        }
        return $films;
    }
}
