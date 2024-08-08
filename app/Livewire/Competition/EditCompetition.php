<?php

namespace App\Livewire\Competition;

use App\Livewire\Forms\CompetitionForm;
use App\Models\Competition;
use Livewire\Component;

class EditCompetition extends Component
{
    public CompetitionForm $form;

    public function mount(Competition $competition): void
    {
        $this->form->setCompetition($competition);

    }
    public function save(): void
    {
        $competition = $this->form->update();
        $this->redirectRoute('competition.edit', ['competition' => $competition]);
    }

    public function render()
    {
        return view('livewire.competition.edit-competition');
    }
}
