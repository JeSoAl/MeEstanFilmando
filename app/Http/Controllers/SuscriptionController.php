<?php

namespace App\Http\Controllers;

use App\Models\Suscription;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Services\SuscriptionsService;
use Illuminate\Http\Request;

class SuscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suscriptions = Suscription::all();
        return view('suscriptions.index', compact('suscriptions', 'request'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, User $user)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Suscription $suscription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Suscription $suscription, User $user)
    {
        return view('suscriptions.edit', compact('suscription', 'user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Suscription $suscription, User $user)
    {
        $user->suscription_id = $suscription->id;
        $user->suscription = true;
        $user->update();

        return to_route('suscriptions.suscribed');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->suscription_id = null;
        $user->suscription = false;
        $user->update();
        
        return to_route('suscriptions.unsuscribed');
    }
}
