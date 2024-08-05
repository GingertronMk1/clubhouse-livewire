<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGameRequest;
use App\Http\Requests\UpdateGameRequest;
use App\Models\Game;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Support\Facades\Response;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\View\View
    {
        return view(
            'game.index',
            [
                'games' => Game::all(),
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): \Illuminate\View\View
    {
        return view(
            'game.create'
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGameRequest $request): \Illuminate\View\View {}

    /**
     * Display the specified resource.
     */
    public function show(Game $game): \Illuminate\View\View
    {
        return view(
            'game.show',
            [
                'game' => $game,
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Game $game): \Illuminate\View\View
    {
        return view(
            'game.edit',
            [
                'game' => $game,
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGameRequest $request, Game $game): \Illuminate\View\View {}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Game $game): \Illuminate\View\View {}
}
