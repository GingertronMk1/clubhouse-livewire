<?php

namespace App\Livewire\Forms;

use App\Models\Sport;
use Livewire\Form;

class SportForm extends Form
{
    public ?Sport $sport = null;
    public string $name = '';
    public string $description = '';

    public function save()
    {
        $values = [
            'name' => $this->name,
            'description' => $this->description,
        ];
        if (isset($this->sport)) {
            $this->sport->update($values);
        } else {
            $this->sport = Sport::create($values);
        }

        return $this->sport;
    }
}
