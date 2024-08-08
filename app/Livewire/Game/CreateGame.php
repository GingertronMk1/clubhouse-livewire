<?php

namespace App\Livewire\Game;

use App\Livewire\Forms\GameForm;
use App\Models\Competition;
use App\Models\Team;
use Livewire\Component;

class CreateGame extends Component
{
    public GameForm $form;

    public function save(): void
    {
        $game = $this->form->create();
        $this->redirectRoute('game.edit', ['game' => $game]);
    }

    public function render()
    {
        return view('livewire.game.create-game')
            ->with('teams', Team::all())
            ->with('competitions', Competition::all())
        ;
    }
}
