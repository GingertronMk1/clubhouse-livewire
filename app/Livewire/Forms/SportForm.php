<?php

namespace App\Livewire\Forms;

use App\Models\Sport;

class SportForm extends BaseForm
{
    public ?Sport $sport = null;
    public string $name = '';
    public string $description = '';
    public string $colour = '#FFFFFF';

    public function create(): Sport
    {
        return Sport::create($this->getFillables(Sport::class));
    }

    public function update(): Sport
    {
        $this->sport->update($this->getFillables(Sport::class));
        return $this->sport;
    }
}
