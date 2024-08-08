<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTeamRequest;
use App\Http\Requests\UpdateTeamRequest;
use App\Livewire\Team\CreateTeam;
use App\Livewire\Team\EditTeam;
use App\Models\Team;
use GuzzleHttp\Promise\Create;
use Illuminate\View\View;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Foundation\Application;
use Illuminate\Http\Response;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view(
            'team.index',
            [
                'teams' => Team::all(),
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Application|Response|ResponseFactory
    {
        return $this->renderLivewire(CreateTeam::class);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTeamRequest $request): View {}

    /**
     * Display the specified resource.
     */
    public function show(Team $team): View
    {
        return view(
            'team.show',
            [
                'team' => $team,
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team $team): Application|Response|ResponseFactory
    {
        return $this->renderLivewire(EditTeam::class);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTeamRequest $request, Team $team): View {}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $team): View {}
}
