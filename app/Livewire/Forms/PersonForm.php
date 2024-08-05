<?php

namespace App\Livewire\Forms;

use App\Models\Person;
use Livewire\Form;

class PersonForm extends Form {
    private ?Person $person;
    public string $name = '';
    public string $bio = '';
    public string $dob = '';
    public string $user_id = '';

    public function setPerson(Person $person): void
    {
        $this->person = $person;
        $this->name = $person->name ?? '';
        $this->bio = $person->bio ?? '';
        $this->dob = $person->dob?->format('Y-m-d') ?? '';
        $this->user_id = $person->user_id ?? '';
    }

    public function save(): void
    {
        $values = [
            'name' => $this->name,
            'bio' => $this->bio,
            'dob' => strlen($this->dob) > 0 ? $this->dob : null,
            'user_id' => strlen($this->user_id) ? $this->user_id : null,
        ];
        if (isset($this->person)) {
            $this->person->update($values);
        } else {
            Person::create($values);
        }
    }
}
