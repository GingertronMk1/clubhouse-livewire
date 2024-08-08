<?php

namespace App\Livewire\Forms;

use App\Models\Person;
use App\Models\User;
use Livewire\Form;

class PersonForm extends Form
{
    private ?Person $person;
    public string $name = '';
    public string $bio = '';
    public string $dob = '';
    public ?User $user = null;

    public function setPerson(Person $person): void
    {
        $this->person = $person;
        $this->name = $person->name ?? '';
        $this->bio = $person->bio ?? '';
        $this->dob = $person->dob?->format('Y-m-d') ?? '';
        $this->user = $person->user;
    }

    public function create(): Person
    {
        return Person::create($this->all());
    }

    public function update(): Person
    {
        $this->person->update($this->all());

        return $this->person;
    }
}
