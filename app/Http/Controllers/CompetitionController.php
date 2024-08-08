<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCompetitionRequest;
use App\Http\Requests\UpdateCompetitionRequest;
use App\Livewire\Competition\CreateCompetition;
use App\Livewire\Competition\EditCompetition;
use App\Models\Competition;
use Illuminate\View\View;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Foundation\Application;
use Illuminate\Http\Response;

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
                'competitions' => Competition::with('children')->get(),
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Application|Response|ResponseFactory
    {
        return $this->renderLivewire(CreateCompetition::class);
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
    public function edit(Competition $competition): Application|Response|ResponseFactory
    {
        return $this->renderLivewire(EditCompetition::class);
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
