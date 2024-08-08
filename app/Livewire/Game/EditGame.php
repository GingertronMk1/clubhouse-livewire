<?php

namespace App\Livewire\Game;

use App\Livewire\Forms\GameForm;
use App\Models\Game;
use Livewire\Component;

class EditGame extends Component
{
    public GameForm $form;

    public function mount(Game $game): void
    {
        $this->form->setGame($game);
    }
    public function render()
    {
        return view('livewire.game.edit-game') ;
    }
}
