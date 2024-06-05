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
        $films = $this->filmsService->search($request)->get();
        return view('admin.films.index', compact('films', 'genres', 'awards', 'actors', 'directors', 'platforms', 'request'));
    }

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
        $filmUser = new Film();
        return view('admin.films.create', compact('filmUser', 'films', 'genres', 'actors', 'awards', 'directors', 'platforms'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, User $user)
    {
        $genres = Genre::all();
        $filters = [];
        $film = Film::create($request->all());
        $film->save();

        // Iterar géneros
        foreach ($genres as $genre) {
            if (isset($request->input($genre->id .'radio'))) {
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
                if (isset($request->input($genre->id .'checkboxYes')) && $request->input($genre->id .'checkboxYes') == true) {
                    $userGenre = new UserGenre();
                    $userGenre->user_id = $user->id;
                    $userGenre->genre_id = $genre->id;
                    $userGenre->type = true;
                    $userGenre->save();
                }
                else if (isset($request->input($genre->id .'checkboxNo')) && $request->input($genre->id .'checkboxNo') == true) {
                    $userGenre = new UserGenre();
                    $userGenre->user_id = $user->id;
                    $userGenre->genre_id = $genre->id;
                    $usergenre->type = false;
                    $userGenre->save();
                }
            }
        }

        $userGenres = UserGenre::where('user_id', $user->id)->where('type', 'true');
        $films = Film::whereIn('genre_id', $user->genre_ids())->where('ty')->inRandomOrder()->limit(15)->get(); 
        $films = Film::all();
        $films->where(function ($q) {
            $i = 0;
            foreach ($userGenres as $userGenre) {
                if ($i == 0) {
                    $q->Where('id', $userGenre->genre_id);
                }
                else {
                    $q->orWhere('id', $userGenre->genre_id);
                }
                $i++;
            }
        })->inRandomOrder();
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

        // Iterar $request->input('filmGenres')
        if ($request->input('filmGenres')) {
            $filmGenres = $film->genres()->get();
            foreach ($filmGenres as $filmGenre) {
                $count = 0;
                foreach ($request->input('filmGenres') as $key => $value) {
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
            foreach ($request->input('filmGenres') as $key => $value) {
                if (!isset($value['id'])) {
                    $filmGenre = new filmGenre();
                    $filmGenre->genre_id = $value['genre_id'];
                    $filmGenre->film_id = $film->id;
                    $filmGenre->save();
                }
            }
        }

        // Iterar $request->input('filmActors')
        if ($request->input('filmActors')) {
            $filmActors = $film->actors()->get();
            foreach ($filmActors as $filmActor) {
                $count = 0;
                foreach ($request->input('filmActors') as $key => $value) {
                    if (isset($value['id']) && $filmActor->id == $value['id']) {
                        $filmActor->actor_id = $value['actor_id'];
                        $filmActor->film_id = $film->id;
                        $filmActor->update();
                        $count++;
                    }
                }
                if ($count == 0) {
                    $filmActor->delete();
                }
            }
            foreach ($request->input('filmActors') as $key => $value) {
                if (!isset($value['id'])) {
                    $filmActor = new filmActor();
                    $filmActor->actor_id = $value['actor_id'];
                    $filmActor->film_id = $film->id;
                    $filmActor->save();
                }
            }
        }

        // Iterar $request->input('filmAwards')
        if ($request->input('filmAwards')) {
            $filmAwards = $film->awards()->get();
            foreach ($filmAwards as $filmAward) {
                $count = 0;
                foreach ($request->input('filmAwards') as $key => $value) {
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
            foreach ($request->input('filmAwards') as $key => $value) {
                if (!isset($value['id'])) {
                    $filmAward = new filmAward();
                    $filmAward->number = $value['number'];
                    $filmAward->award_id = $value['award_id'];
                    $filmAward->film_id = $film->id;
                    $filmAward->save();
                }
            }
        }

        // Iterar $request->input('filmPlatforms')
        if ($request->input('filmPlatforms')) {
            $filmPlatforms = $film->platforms()->get();
            foreach ($filmPlatforms as $filmPlatform) {
                $count = 0;
                foreach ($request->input('filmPlatforms') as $key => $value) {
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
            foreach ($request->input('filmPlatforms') as $key => $value) {
                if (!isset($value['id'])) {
                    $filmPlatform = new filmPlatform();
                    $filmPlatform->platform_id = $value['platform_id'];
                    $filmPlatform->film_id = $film->id;
                    $filmPlatform->save();
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
