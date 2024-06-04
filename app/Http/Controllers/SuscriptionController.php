<?php

namespace App\Http\Controllers;

use App\Models\Suscription;
use App\Http\Controllers\Controller;
use App\Services\SuscriptionsService;
use Illuminate\Http\Request;

class SuscriptionController extends Controller
{
    private $suscriptionsService;

    public function __construct(SuscriptionsService $suscriptionsService)
    {
        $this->suscriptionsService = $suscriptionsService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $suscriptions = $this->suscriptionsService->search($request)->get();
        return view('suscriptions.index', compact('suscriptions', 'request'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $suscription = new Suscription();
        return view('suscriptions.create', compact('suscriptions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $suscription = Suscription::create($request->all());
        $suscription->save();

        return to_route('suscriptions.index');
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
    public function edit(Suscription $suscription)
    {
        return view('suscriptions.edit', compact('suscription'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Suscription $suscription)
    {
        $suscription->update($request->all());

        return to_route('suscriptions.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Suscription $suscription)
    {
        $suscription->delete();
        return to_route('suscriptions.index');
    }
}
