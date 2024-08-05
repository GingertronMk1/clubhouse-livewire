<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTeamRequest;
use App\Http\Requests\UpdateTeamRequest;
use App\Models\Team;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Support\Facades\Response;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Responsable|Response
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
    public function create(): Responsable|Response
    {
        return view(
            'team.create'
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTeamRequest $request): Responsable|Response {}

    /**
     * Display the specified resource.
     */
    public function show(Team $team): Responsable|Response
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
    public function edit(Team $team): Responsable|Response
    {
        return view(
            'team.edit',
            [
                'team' => $team,
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTeamRequest $request, Team $team): Responsable|Response {}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $team): Responsable|Response {}
}