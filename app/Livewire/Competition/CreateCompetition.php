<?php

namespace App\Livewire\Competition;

use App\Livewire\Forms\CompetitionForm;
use App\Models\Competition;
use App\Models\Sport;
use Livewire\Component;

class CreateCompetition extends Component
{
    public CompetitionForm $form;

    public function save(): void
    {
        $competition = $this->form->create();
        $this->redirectRoute('competition.edit', ['competition' => $competition]);
    }

    public function render()
    {
        return view('livewire.competition.create-competition')
            ->with('competitions', Competition::all())
            ->with('sports', Sport::all())
        ;
    }
}
