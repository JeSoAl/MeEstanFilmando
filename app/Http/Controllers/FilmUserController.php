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
use App\Http\Controllers\Controller;
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
    public function store(Request $request, User $user)
    {
        $genres = Genre::all();
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
                else if ($request->input($genre->id .'radio') == 'no') {
                    $userGenre = new UserGenre();
                    $userGenre->user_id = $user->id;
                    $userGenre->genre_id = $genre->id;
                    $usergenre->type = false;
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

        $films = Film::whereHas('genres', function($query) use ($user) { $query->whereIn('genre_id', $user->genre_ids()); }); 
        $userGenres = UserGenre::where('user_id', $user->id)->where('type', 'false');
        foreach ($userGenres as $userGenre) {
            $films->whereHas('genres', function($query) use ($user) { $query->where('id', '!=', $userGenre->genre_id); });
        }
        $userPlatforms = UserPlatform::where('user_id', $user->id);
        foreach ($userPlatforms as $userPlatform) {
            $films->whereHas('platforms', function($query) use ($user) { $query->where('id', $userPlatform->platform_id); });
        }
        $userNoFilms = UserNoFilm::where('user_id', $user->id)->where('type', 'false');
        foreach ($userNoFilms as $userNoFilm) {
            $films->whereHas('noFilms', function($query) use ($user) { $query->where('id', '!=', $userNoFilm->film_id); });
        }
        $films->inRandomOrder()->limit(15)->get(); 
        foreach ($films as $film) {
            $filmUser = new FilmUser();
            $filmUser->user_id = $user->id;
            $filmUser->film_id = $film->id;
            $filmUser->save();
        }

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
        $directors = Director::all();
        $actors = Actor::all();
        $genres = Genre::all();
        $awards = Award::all();
        $platforms = Platform::all();
        $filmGenres = $film->genres()->get();
        $filmActors = $film->actors()->get();
        $filmAwards = $film->awards()->get();
        $filmPlatforms = $film->platforms()->get();
        return view('admin.films.edit', compact('film', 'genres', 'actors', 'awards', 'directors', 'platforms', 'filmGenres', 'filmActors', 'filmAwards', 'filmPlatforms'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FilmUser $filmUser, User $user)
    {
        $userGenres = UserGenre::all();
        $userPlatforms = UserPlatform::all();
        $filmUsers = FilmUser::all();
        $genres = Genre::all();
        $platforms = Platform::all();

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

        foreach ($filmUsers as $filmUser) {
            if ($filmUser->user_id == $user->id) {
                $filmUser->delete();
            }
        }

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
                else if ($request->input($genre->id .'radio') == 'no') {
                    $userGenre = new UserGenre();
                    $userGenre->user_id = $user->id;
                    $userGenre->genre_id = $genre->id;
                    $usergenre->type = false;
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

        $films = Film::whereHas('genres', function($query) use ($user) { $query->whereIn('genre_id', $user->genre_ids()); }); 
        $userGenres = UserGenre::where('user_id', $user->id)->where('type', 'false');
        foreach ($userGenres as $userGenre) {
            $films->whereHas('genres', function($query) use ($user) { $query->where('id', '!=', $userGenre->genre_id); });
        }
        $userPlatforms = UserPlatform::where('user_id', $user->id);
        foreach ($userPlatforms as $userPlatform) {
            $films->whereHas('platforms', function($query) use ($user) { $query->where('id', $userPlatform->platform_id); });
        }
        $userNoFilms = UserNoFilm::where('user_id', $user->id)->where('type', 'false');
        foreach ($userNoFilms as $userNoFilm) {
            $films->whereHas('noFilms', function($query) use ($user) { $query->where('id', '!=', $userNoFilm->film_id); });
        }
        $films->inRandomOrder()->limit(15)->get(); 
        foreach ($films as $film) {
            $filmUser = new FilmUser();
            $filmUser->user_id = $user->id;
            $filmUser->film_id = $film->id;
            $filmUser->save();
        }

        return to_route('admin.films.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FilmUser $filmUser)
    {
        $userNoFilm = new UserNoFilm();
        $userNoFilm->user_id = $filmUser->user_id;
        $userNoFilm->film_id = $filmUser->film_id;
        $userNoFilm->save();
        $filmUser->delete();
        return to_route('admin.films.index');
    }
}
