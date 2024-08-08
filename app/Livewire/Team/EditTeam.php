<?php

namespace App\Livewire\Team;

use App\Livewire\Forms\TeamForm;
use App\Models\Team;
use Livewire\Component;
use Illuminate\Contracts\View\View;

class EditTeam extends Component
{
    public TeamForm $form;

    public function mount(Team $team)
    {
        $this->form->setTeam($team);
    }

    public function save()
    {
        $team = $this->form->update();
        session()->flash('status', 'Team successfully updated.');
        $this->redirectRoute('team.edit', $team);
    }

    public function render(): View
    {
        return view('livewire.team.edit-team');
    }
}
