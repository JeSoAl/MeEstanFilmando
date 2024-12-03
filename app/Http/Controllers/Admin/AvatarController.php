<?php

namespace App\Http\Controllers\Admin;

use App\Models\Avatar;
use App\Http\Controllers\Controller;
use App\Services\AvatarsService;
use Illuminate\Http\Request;

class AvatarController extends Controller
{
    private $avatarsService;

    public function __construct(AvatarsService $avatarsService)
    {
        $this->avatarsService = $avatarsService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $avatars = $this->avatarsService->search($request)->paginate($request->get('per_page', 10));
        return view('admin.avatars.index', compact('avatars', 'request'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $avatar = new Avatar();
        return view('admin.avatars.create', compact('avatar'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $avatar = Avatar::create($request->all());
        $avatar->save();

        return to_route('admin.avatars.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Avatar $avatar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Avatar $avatar)
    {
        return view('admin.avatars.edit', compact('avatar'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Avatar $avatar)
    {
        $avatar->update($request->all());

        return to_route('admin.avatars.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Avatar $avatar)
    {
        $avatar->delete();
        return to_route('admin.avatars.index');
    }
}
