<?php

namespace App\Http\Controllers\Admin;

use App\Models\Genre;
use App\Http\Controllers\Controller;
use App\Services\GenresService;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    private $genresService;

    public function __construct(GenresService $genresService)
    {
        $this->genresService = $genresService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $genres = $this->genresService->search($request)->paginate($request->get('per_page', 10));
        return view('admin.genres.index', compact('genres', 'request'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genre = new Genre();
        return view('admin.genres.create', compact('genre'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $genre = Genre::create($request->all());
        $genre->save();

        return to_route('admin.genres.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Genre $genre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Genre $genre)
    {
        return view('admin.genres.edit', compact('genre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Genre $genre)
    {
        $genre->update($request->all());

        return to_route('admin.genres.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Genre $genre)
    {
        $genre->delete();
        return to_route('admin.genres.index');
    }
}
