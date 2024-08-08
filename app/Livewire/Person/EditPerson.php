<?php

namespace App\Livewire\Person;

use App\Livewire\Forms\PersonForm;
use App\Models\Person;
use App\Models\User;
use Illuminate\View\View;
use Livewire\Component;

class EditPerson extends Component
{
    public PersonForm $form;

    public function mount(Person $person): void
    {
        $this->form->setPerson($person);
    }

    public function save(): void
    {
        $person = $this->form->update();
        $this->redirectRoute('person.edit', ['person' => $person]);
    }

    public function render(): View
    {
        return view('livewire.person.edit-person')
            ->with('users', User::all())
        ;
    }
}
