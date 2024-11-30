<?php

namespace App\Http\Controllers\Admin;

use App\Models\Director;
use App\Http\Controllers\Controller;
use App\Services\DirectorsService;
use Illuminate\Http\Request;

class DirectorController extends Controller
{
    private $directorsService;

    public function __construct(DirectorsService $directorsService)
    {
        $this->directorsService = $directorsService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $directors = $this->directorsService->search($request)->paginate($request->get('per_page', 10));
        return view('admin.directors.index', compact('directors', 'request'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $director = new Director();
        return view('admin.directors.create', compact('director'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $director = Director::create($request->all());
        $director->save();

        return to_route('admin.directors.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Director $director)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Director $director)
    {
        return view('admin.directors.edit', compact('director'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Director $director)
    {
        $director->update($request->all());

        return to_route('admin.directors.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Director $director)
    {
        $director->delete();
        return to_route('admin.directors.index');
    }
}
