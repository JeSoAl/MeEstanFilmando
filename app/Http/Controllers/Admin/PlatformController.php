<?php

namespace App\Http\Controllers\Admin;

use App\Models\Platform;
use App\Http\Controllers\Controller;
use App\Services\PlatformsService;
use Illuminate\Http\Request;

class PlatformController extends Controller
{
    private $platformsService;

    public function __construct(PlatformsService $platformsService)
    {
        $this->platformsService = $platformsService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $platforms = $this->platformsService->search($request)->paginate($request->get('per_page', 10));
        return view('admin.platforms.index', compact('platforms', 'request'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $platform = new Platform();
        return view('admin.platforms.create', compact('platform'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $platform = Platform::create($request->all());
        $platform->save();

        return to_route('admin.platforms.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Platform $platform)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Platform $platform)
    {
        return view('admin.platforms.edit', compact('platform'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Platform $platform)
    {
        $platform->update($request->all());

        return to_route('admin.platforms.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Platform $platform)
    {
        $platform->delete();
        return to_route('admin.platforms.index');
    }
}
