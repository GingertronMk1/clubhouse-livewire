<?php

namespace App\Livewire\Forms;

use App\Models\Person;

class PersonForm extends BaseForm
{
    public ?Person $person = null;
    public string $name = '';
    public string $bio = '';
    public ?string $dob = null;
    public ?string $user_id = null;

    public function setPerson(Person $person): void
    {
        $this->person = $person;
        $this->name = $person->name ?? '';
        $this->bio = $person->bio ?? '';
        $this->dob = $person->dob?->format('Y-m-d') ?? '';
        $this->user_id = $person->user?->id ?? null;
    }

    public function create(): Person
    {
        return Person::create($this->getFillables(Person::class));
    }

    public function update(): Person
    {
        $this->person->update($this->getFillables($this->person));

        return $this->person;
    }
}
