<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGameRequest;
use App\Http\Requests\UpdateGameRequest;
use App\Livewire\Game\CreateGame;
use App\Livewire\Game\EditGame;
use App\Models\Game;
use Illuminate\View\View;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
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
    public function create(): \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Foundation\Application|\Illuminate\Http\Response
    {
        return $this->renderLivewire(CreateGame::class);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGameRequest $request): View {}

    /**
     * Display the specified resource.
     */
    public function show(Game $game): View
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
    public function edit(Game $game): \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Foundation\Application|\Illuminate\Http\Response
    {
        return $this->renderLivewire(EditGame::class);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGameRequest $request, Game $game): View {}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Game $game): View {}
}
