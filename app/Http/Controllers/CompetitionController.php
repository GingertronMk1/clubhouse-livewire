<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCompetitionRequest;
use App\Http\Requests\UpdateCompetitionRequest;
use App\Models\Competition;
use Illuminate\View\View;

class CompetitionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
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
    public function create(): View
    {
        return view(
            'competition.create'
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCompetitionRequest $request): View {}

    /**
     * Display the specified resource.
     */
    public function show(Competition $competition): View
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
    public function edit(Competition $competition): View
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
    public function update(UpdateCompetitionRequest $request, Competition $competition): View {}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Competition $competition): View {}
}
