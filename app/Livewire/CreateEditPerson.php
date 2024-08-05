<?php

namespace App\Livewire;

use App\Livewire\Forms\PersonForm;
use App\Models\Person;
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
    }

    public function render()
    {
        return view('livewire.create-edit-person');
    }
}
