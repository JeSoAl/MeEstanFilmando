<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\User;
use App\Models\Actor;
use App\Models\Director;
use App\Models\Award;
use App\Models\Platform;
use App\Models\Genre;
use App\Models\FilmUser;
use App\Models\FilmActor;
use App\Models\FilmGenre;
use App\Models\FilmPlatform;
use App\Models\UserGenre;
use App\Models\UserActor;
use App\Models\UserDirector;
use App\Http\Controllers\Controller;
use App\Services\FilmsService;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class FilmController extends Controller
{
    private $filmsService;

    public function __construct(FilmsService $filmsService)
    {
        $this->filmsService = $filmsService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $films = $this->filmsService->search($request)->paginate($request->get('per_page', 15));
        return view('films.index', compact('films', 'request'));
    }

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
        return view('films.create', compact('filmUser', 'genres', 'actors', 'directors', 'platforms'));
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

        $users = User::where('email', 'meestanfilmando'. $user->id .'@meestanfilmando')->get();

        $size = $users->count();
        $toDeleteUser;

        if ($size != 0) {
            $toDeleteUser = $users->first();
            $toDeleteUser->delete();
        }

        $quickUser = User::create([
            'name' => 'x',
            'email' => 'meestanfilmando'. $user->id .'@meestanfilmando',
            'password' => Hash::make('12345678'),
        ]);

        event(new Registered($quickUser));

        // Iterar géneros
        foreach ($genres as $genre) {
            if ($request->input($genre->id .'radio') !== null) {
                if ($request->input($genre->id .'radio') == 'yes') {
                    $userGenre = new UserGenre();
                    $userGenre->user_id = $quickUser->id;
                    $userGenre->genre_id = $genre->id;
                    $userGenre->type = true;
                    $userGenre->save();
                }
                else if ($request->input($genre->id . 'radio') == 'no') {
                    $userGenre = new UserGenre();
                    $userGenre->user_id = $quickUser->id;
                    $userGenre->genre_id = $genre->id;
                    $userGenre->type = false;
                    $userGenre->save();
                }
            }
            else {
                if ($request->input($genre->id .'checkboxYes') !== null && $request->input($genre->id .'checkboxYes') == true) {
                    $userGenre = new UserGenre();
                    $userGenre->user_id = $quickUser->id;
                    $userGenre->genre_id = $genre->id;
                    $userGenre->type = true;
                    $userGenre->save();
                }
                else if ($request->input($genre->id .'checkboxNo') !== null && $request->input($genre->id .'checkboxNo') == true) {
                    $userGenre = new UserGenre();
                    $userGenre->user_id = $quickUser->id;
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
                $userPlatform->user_id = $quickUser->id;
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
                    $userDirector->user_id = $quickUser->id;
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
                    $userDirector->user_id = $quickUser->id;
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
                    $userActor->user_id = $quickUser->id;
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
                    $userActor->user_id = $quickUser->id;
                    $userActor->type = false;
                    $userActor->save();
                }
            }
        }
        
        $quickUser->recomendation = true;
        $quickUser->update();

        return to_route('films.show', compact('quickUser'));
    }
    
    /**
     * Display the specified resource.
     */
    public function show(User $quickUser)
    {
        $films = $this->generate($quickUser);
        $film = $films->random();
        return view('films.show', compact('films', 'film', 'quickUser'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $quickUser)
    {
        $quickUser->delete();
        return to_route('dashboard');
    }

    // Generar lista de películas
    public static function generate(User $user)
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
            $films = Film::where('cinema', 0)->get();
        }
        return $films;
    }
}
