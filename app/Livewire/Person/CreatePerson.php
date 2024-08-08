<?php

namespace App\Livewire\Person;

use App\Livewire\Forms\PersonForm;
use App\Models\User;
use Livewire\Component;
use Illuminate\Contracts\View\View;

class CreatePerson extends Component
{
    public PersonForm $form;

    public function save(): void
    {
        $person = $this->form->create();
        $this->redirectRoute('person.edit', ['person' => $person]);
    }

    public function render(): View
    {
        return view('livewire.person.create-person')
            ->with('users', User::all())
        ;
    }
}
