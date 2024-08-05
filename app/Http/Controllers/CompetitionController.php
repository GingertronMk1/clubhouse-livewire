<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCompetitionRequest;
use App\Http\Requests\UpdateCompetitionRequest;
use App\Models\Competition;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Support\Facades\Response;

class CompetitionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Responsable|Response
    {
        return view(
            'competition.index',
            [
                'competitions' => Competition::all(),
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Responsable|Response
    {
        return view(
            'competition.create'
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCompetitionRequest $request): Responsable|Response {}

    /**
     * Display the specified resource.
     */
    public function show(Competition $competition): Responsable|Response
    {
        return view(
            'competition.show',
            [
                'competition' => $competition,
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Competition $competition): Responsable|Response
    {
        return view(
            'competition.edit',
            [
                'competition' => $competition,
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCompetitionRequest $request, Competition $competition): Responsable|Response {}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Competition $competition): Responsable|Response {}
}
