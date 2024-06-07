<?php

namespace App\Http\Controllers\Admin;

use App\Models\Actor;
use App\Http\Controllers\Controller;
use App\Services\ActorsService;
use Illuminate\Http\Request;

class ActorController extends Controller
{
    private $actorsService;

    public function __construct(ActorsService $actorsService)
    {
        $this->actorsService = $actorsService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $actors = $this->actorsService->search($request)->get();
        return view('admin.actors.index', compact('actors', 'request'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $actor = new Actor();
        return view('admin.actors.create', compact('actor'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $actor = Actor::create($request->all());
        $actor->save();

        return to_route('admin.actors.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Actor $actor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Actor $actor)
    {
        return view('admin.actors.edit', compact('actor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Actor $actor)
    {
        $actor->update($request->all());

        return to_route('admin.actors.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Actor $actor)
    {
        $actor->delete();
        return to_route('admin.actors.index');
    }
}
