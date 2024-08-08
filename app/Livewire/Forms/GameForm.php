<?php

namespace App\Livewire\Forms;

use App\Models\Game;

class GameForm extends BaseForm
{
    public ?Game $game = null;
    public string $name = '';
    public string $start;
    public string $description = '';
    public string $summary = '';
    public ?string $competition_id = null;
    public ?string $team_1_id;
    public ?string $team_2_id;

    public function setGame(Game $game): void
    {
        $this->game = $game;
        $this->name = $game->name;
        $this->start = $game->start;
        $this->summary = $game->summary;
        $this->competition_id = $game->competition_id;
        $this->team_1_id = $game->team_1_id;
        $this->team_2_id = $game->team_2_id;
    }

    public function create(): Game
    {
        return Game::create($this->getFillables(Game::class));
    }

    public function update(): Game
    {
        $this->game->update($this->getFillables($this->game));

        return $this->game;
    }
}
