<?php

namespace App\Livewire\Team;

use App\Livewire\Forms\TeamForm;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class CreateTeam extends Component
{
    public TeamForm $form;

    public function save(): void
    {
        $team = $this->form->create();
        $this->redirectRoute('team.edit', ['team' => $team]);
    }

    public function render(): View
    {
        return view('livewire.team.create-team');
    }
}
