<?php

namespace App\Http\Controllers;

use App\Models\Award;
use App\Http\Controllers\Controller;
use App\Services\AwardsService;
use Illuminate\Http\Request;

class AwardController extends Controller
{
    private $awardsService;

    public function __construct(AwardsService $awardsService)
    {
        $this->awardsService = $awardsService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $awards = $this->awardsService->search($request)->get();
        return view('awards.index', compact('awards', 'request'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $award = new Award();
        return view('awards.create', compact('awards'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $award = Award::create($request->all());
        $award->save();

        return to_route('awards.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Award $award)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Award $award)
    {
        return view('awards.edit', compact('award'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Award $award)
    {
        $award->update($request->all());

        return to_route('awards.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Award $award)
    {
        $award->delete();
        return to_route('awards.index');
    }
}
