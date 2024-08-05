<?php

namespace App\Livewire;

use App\Livewire\Forms\PersonForm;
use App\Models\Person;
use App\Models\User;
use Livewire\Component;

class CreateEditPerson extends Component
{
    public PersonForm $form;

    public function mount(?Person $person = null): void {
        if (!is_null($person)) {
            $this->form->setPerson($person);
        }
    }

    public function save(): void
    {
        $this->form->save();
        $this->redirectRoute('person.index');
    }

    public function render()
    {
        return view('livewire.create-edit-person')
            ->with('users', User::all())
            ;

    }
}
