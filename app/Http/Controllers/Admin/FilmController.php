<?php

namespace App\Http\Controllers\Admin;

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
use App\Models\FilmAward;
use App\Models\FilmPlatform;
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
        $platforms = Platform::all();
        $films = $this->filmsService->search($request)->paginate($request->get('per_page', 10));
        return view('admin.films.index', compact('films', 'genres', 'actors', 'directors', 'platforms', 'request'));
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
        // Guardar película
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
        $film->cinema = $request->cinema;
        if ($director_id >= 0) {
            $film->director_id = $director_id;
        }
        $film->save();

        // Iterar $request->input('genres')
        if ($request->input('genres')) {
            foreach ($request->input('genres') as $key => $value) {
                $existingIntermediates = FilmGenre::where('genre_id', $value['genre_id'])->where('film_id', $film->id)->get();
                $size = $existingIntermediates->count();
                if ($size == 0) {
                    $filmGenre = new FilmGenre();
                    $filmGenre->genre_id = $value['genre_id'];
                    $filmGenre->film_id = $film->id;
                    $filmGenre->save();
                }
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
                    $existingIntermediates = FilmActor::where('actor_id', $actor_id)->where('film_id', $film->id)->get();
                    $size = $existingIntermediates->count();
                    if ($size == 0) {
                        $filmActor = new FilmActor();
                        $filmActor->actor_id = $actor_id;
                        $filmActor->film_id = $film->id;
                        $filmActor->save();
                    }
                }
            }
        }

        // Iterar $request->input('platforms')
        if ($request->input('platforms')) {
            foreach ($request->input('platforms') as $key => $value) {
                $existingIntermediates = FilmPlatform::where('platform_id', $value['platform_id'])->where('film_id', $film->id)->get();
                $size = $existingIntermediates->count();
                if ($size == 0) {
                    $filmPlatform = new FilmPlatform();
                    $filmPlatform->platform_id = $value['platform_id'];
                    $filmPlatform->film_id = $film->id;
                    $filmPlatform->save();
                }
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

        return to_route('admin.films.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Film $film)
    {
        return view('admin.films.show', compact('film'));
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
        $filmGenres = FilmGenre::where('film_id', $film->id)->get();
        $filmActors = FilmActor::where('film_id', $film->id)->get();
        $filmAwards = FilmAward::where('film_id', $film->id)->get();
        $filmPlatforms = FilmPlatform::where('film_id', $film->id)->get();
        return view('admin.films.edit', compact('film', 'genres', 'actors', 'awards', 'directors', 'platforms', 'filmGenres', 'filmActors', 'filmAwards', 'filmPlatforms'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Film $film)
    {
        // Actualizar película
        $directors = Director::all();
        $director_id = -1;
        foreach ($directors as $director) {
            if ($director->name == $request->director_id) {
                $director_id = $director->id;
            }
        }
        $film->title = $request->title;
        $film->original = $request->original;
        $film->duration = $request->duration;
        $film->year = $request->year;
        $film->cinema = $request->cinema;
        $film->picture = $request->picture;
        if ($director_id >= 0) {
            $film->director_id = $director_id;
        }
        $film->save();

        // Iterar $request->input('genres')
        if ($request->input('genres')) {
            $filmGenres = FilmGenre::where('film_id', $film->id)->get();
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
            $filmActors = FilmActor::where('film_id', $film->id)->get();
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
            $filmPlatforms = FilmPlatform::where('film_id', $film->id)->get();
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
