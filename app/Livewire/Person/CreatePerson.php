<?php

namespace App\Livewire\Person;

use App\Livewire\Forms\PersonForm;
use App\Models\User;
use Livewire\Component;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class CreatePerson extends Component
{
    public PersonForm $form;

    public function save()
    {
        $person = $this->form->create();
        $this->redirectRoute('person.edit', ['person' => $person]);
    }

    public function render(): Application|Factory|View
    {
        return view('livewire.person.create-person')
            ->with('users', User::all())
        ;
    }
}
