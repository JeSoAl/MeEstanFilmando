<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\User;
use App\Models\Actor;
use App\Models\Director;
use App\Models\Award;
use App\Models\Platform;
use App\Models\FilmUser;
use App\Models\FilmActor;
use App\Models\FilmGenre;
use App\Models\FilmAward;
use App\Models\FilmPlatform;
use App\Http\Controllers\Controller;
use App\Services\FilmsService;
use Illuminate\Http\Request;

class FilmController extends Controller
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


        $newUser = ['name' => 'x', 'email' => 'meestanfilmando'. $user->id .'@meestanfilmando', 'password' => '12345678', 'password_confirmation' => '12345678'];
        
        $newUser->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $newUser->name,
            'email' => $newUser->email,
            'password' => Hash::make($newUser->password),
        ]);

        event(new Registered($user));

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

        $films = generate($user);

        return to_route('filmUsers.show', compact('user', 'films'));
    }
    
    /**
     * Display the specified resource.
     */
    public function show(User $user, $films)
    {
        $film = $films->first();
        $films = $films->where('id', '!=', $film->id)->get();
        $directors = Director::all();
        $actors = $film->actors()->get();
        $genres = $film->genres()->get();
        $platforms = $film->platforms()->get();
        return view('filmsUsers.show', compact('films', 'film', 'genres', 'actors', 'directors', 'platforms'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return to_route('dashboard');
    }

    // Generar lista de películas
    public static function generate(User $user)
    {
        $films = Film::whereHas('genres', function($query) use ($user) { $query->whereIn('genre_id', $user->genre_ids()); }); 
        $userGenres = UserGenre::where('user_id', $user->id)->where('type', 'false')->get();
        foreach ($userGenres as $userGenre) {
            $films->whereHas('genres', function($query) use ($userGenre) { $query->where('id', '!=', $userGenre->genre_id); });
        }
        $userDirectors = UserDirector::where('user_id', $user->id)->where('type', 'false')->get();
        foreach ($userDirectors as $userDirector) {
            $films->where('director_id', '!=', $userDirector->director_id);
        }
        $userActors = UserActor::where('user_id', $user->id)->where('type', 'false')->get();
        foreach ($userActors as $userActor) {
            $films->whereHas('actors', function($query) use ($userActor) { $query->where('id', '!=', $userActor->actor_id); });
        }
        $i = 0;
        foreach ($films as $film) {
            $i++;
        }
        if ($i === 0) {
            $films = Film::all();
        }
        $userPlatforms = UserPlatform::where('user_id', $user->id)->get();
        foreach ($userPlatforms as $userPlatform) {
            $films->whereHas('platforms', function($query) use ($userPlatform) { $query->where('id', $userPlatform->platform_id); });
        }
        $films->inRandomOrder()->get(); 
        return $films;
    }
}
