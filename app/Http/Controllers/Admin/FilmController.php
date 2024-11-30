<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Film;
use App\Models\Actor;
use App\Models\Director;
use App\Models\Award;
use App\Models\Platform;
use App\Models\Genre;
use App\Models\FilmActor;
use App\Models\FilmGenre;
use App\Models\FilmAward;
use App\Models\FilmPlatform;
use App\Models\FilmUser;
use App\Models\UserNoFilm;
use App\Models\UserGenre;
use App\Models\UserPlatform;
use App\Http\Controllers\Controller;
use App\Services\FilmsService;
use Illuminate\Http\Request;

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
        $directors = Director::all();
        $actors = Actor::all();
        $genres = Genre::all();
        $awards = Award::all();
        $platforms = Platform::all();
        $films = $this->filmsService->search($request)->paginate($request->get('per_page', 10));
        return view('admin.films.index', compact('films', 'genres', 'awards', 'actors', 'directors', 'platforms', 'request'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $directors = Director::all();
        $actors = Actor::all();
        $genres = Genre::all();
        $awards = Award::all();
        $platforms = Platform::all();
        $film = new Film();
        return view('admin.films.create', compact('film', 'genres', 'actors', 'awards', 'directors', 'platforms'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Guardar películas
        $directors = Director::all();
        $director_id = -1;
        foreach ($directors as $director) {
            if ($director->name == $request->director_id) {
                $director_id = $director->id;
            }
        }
        $film = new Film();
        $film->title = $request->title;
        $film->original = $request->original;
        $film->duration = $request->duration;
        $film->year = $request->year;
        if ($director_id >= 0) {
            $film->director_id = $director_id;
        }
        $film->save();

        // Iterar $request->input('genres')
        if ($request->input('genres')) {
            foreach ($request->input('genres') as $key => $value) {
                $filmGenre = new FilmGenre();
                $filmGenre->genre_id = $value['genre_id'];
                $filmGenre->film_id = $film->id;
                $filmGenre->save();
            }
        }

        // Iterar $request->input('actors')
        if ($request->input('actors')) {
            $actors = Actor::all();
            foreach ($request->input('actors') as $key => $value) {
                $actor_id = -1;
                foreach ($actors as $actor) {
                    if ($actor->name == $value['actor_name']) {
                        $actor_id = $actor->id;
                    }
                }
                if ($actor_id >= 0) {
                    $filmActor = new FilmActor();
                    $filmActor->actor_id = $actor_id;
                    $filmActor->film_id = $film->id;
                    $filmActor->save();
                }
            }
        }

        // Iterar $request->input('platforms')
        if ($request->input('platforms')) {
            foreach ($request->input('platforms') as $key => $value) {
                $filmPlatform = new FilmPlatform();
                $filmPlatform->platform_id = $value['platform_id'];
                $filmPlatform->film_id = $film->id;
                $filmPlatform->save();
            }
        }

        // Iterar $request->input('awards')
        if ($request->input('awards')) {
            foreach ($request->input('awards') as $key => $value) {
                $filmAward = new FilmAward();
                $filmAward->number = $value['number'];
                $filmAward->award_id = $value['award_id'];
                $filmAward->film_id = $film->id;
                $filmAward->save();
            }
        }

        /* FilmUser::truncate();
        $users = User::all();
        foreach ($users as $user) {
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
        } */

        return to_route('admin.films.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Film $film)
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
        return view('admin.films.show', compact('film', 'genres', 'actors', 'awards', 'directors', 'platforms', 'filmGenres', 'filmActors', 'filmAwards', 'filmPlatforms'));
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
    public function update(Request $request, Film $film)
    {
        $film->update($request->all());

        // Iterar $request->input('genres')
        if ($request->input('genres')) {
            $filmGenres = $film->genres()->get();
            foreach ($filmGenres as $filmGenre) {
                $count = 0;
                foreach ($request->input('genres') as $key => $value) {
                    if (isset($value['id']) && $filmGenre->id == $value['id']) {
                        $filmGenre->genre_id = $value['genre_id'];
                        $filmGenre->film_id = $film->id;
                        $filmGenre->update();
                        $count++;
                    }
                }
                if ($count == 0) {
                    $filmGenre->delete();
                }
            }
            foreach ($request->input('genres') as $key => $value) {
                if (!isset($value['id'])) {
                    $filmGenre = new filmGenre();
                    $filmGenre->genre_id = $value['genre_id'];
                    $filmGenre->film_id = $film->id;
                    $filmGenre->save();
                }
            }
        }

        // Iterar $request->input('actors')
        if ($request->input('actors')) {
            $filmActors = $film->actors()->get();
            $actors = Actor::all();
            foreach ($filmActors as $filmActor) {
                $count = 0;
                foreach ($request->input('actors') as $key => $value) {
                    if (isset($value['id']) && $filmActor->id == $value['id']) {
                        $actor_id = -1;
                        foreach ($actors as $actor) {
                            if ($actor->name == $value['actor_name']) {
                                $actor_id = $actor->id;
                            }
                        }
                        if ($actor_id >= 0) {
                            $filmActor->actor_id = $value['actor_id'];
                            $filmActor->film_id = $film->id;
                            $filmActor->update();
                            $count++;
                        }
                    }
                }
                if ($count == 0) {
                    $filmActor->delete();
                }
            }
            foreach ($request->input('actors') as $key => $value) {
                if (!isset($value['id'])) {
                    $actor_id = -1;
                    foreach ($actors as $actor) {
                        if ($actor->name == $value['actor_name']) {
                            $actor_id = $actor->id;
                        }
                    }
                    if ($actor_id >= 0) {
                        $filmActor = new filmActor();
                        $filmActor->actor_id = $actor_id;
                        $filmActor->film_id = $film->id;
                        $filmActor->save();
                    }
                }
            }
        }

        // Iterar $request->input('platforms')
        if ($request->input('platforms')) {
            $filmPlatforms = $film->platforms()->get();
            foreach ($filmPlatforms as $filmPlatform) {
                $count = 0;
                foreach ($request->input('platforms') as $key => $value) {
                    if (isset($value['id']) && $filmPlatform->id == $value['id']) {
                        $filmPlatform->platform_id = $value['platform_id'];
                        $filmPlatform->film_id = $film->id;
                        $filmPlatform->update();
                        $count++;
                    }
                }
                if ($count == 0) {
                    $filmPlatform->delete();
                }
            }
            foreach ($request->input('platforms') as $key => $value) {
                if (!isset($value['id'])) {
                    $filmPlatform = new filmPlatform();
                    $filmPlatform->platform_id = $value['platform_id'];
                    $filmPlatform->film_id = $film->id;
                    $filmPlatform->save();
                }
            }
        }

        // Iterar $request->input('awards')
        if ($request->input('awards')) {
            $filmAwards = $film->awards()->get();
            foreach ($filmAwards as $filmAward) {
                $count = 0;
                foreach ($request->input('awards') as $key => $value) {
                    if (isset($value['id']) && $filmAward->id == $value['id']) {
                        $filmAward->number = $value['number'];
                        $filmAward->award_id = $value['award_id'];
                        $filmAward->film_id = $film->id;
                        $filmAward->update();
                        $count++;
                    }
                }
                if ($count == 0) {
                    $filmAward->delete();
                }
            }
            foreach ($request->input('awards') as $key => $value) {
                if (!isset($value['id'])) {
                    $filmAward = new filmAward();
                    $filmAward->number = $value['number'];
                    $filmAward->award_id = $value['award_id'];
                    $filmAward->film_id = $film->id;
                    $filmAward->save();
                }
            }
        }

        // FilmUser::truncate();
        $users = User::all();
        foreach ($users as $user) {
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
        }

        return to_route('admin.films.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Film $film)
    {
        $film->delete();
        return to_route('admin.films.index');
    }
}
