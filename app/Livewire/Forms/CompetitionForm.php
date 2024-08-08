<?php

namespace App\Livewire\Forms;

use App\Models\Competition;

class CompetitionForm extends BaseForm {
    public ?Competition $competition = null;

    public ?string $parent_id = null;
    public string $name = '';
    public string $description = '';
    public ?string $sport_id = null;

    public function setCompetition(Competition $competition): void {
        $this->competition = $competition;
        $this->parent_id = $competition->parent_id;
        $this->name = $competition->name;
        $this->description = $competition->description;
        $this->sport_id = $competition->sport_id;
    }

    public function create(): Competition
    {
        return Competition::create($this->getFillables(Competition::class));
    }

    public function update(): Competition
    {
        $this->competition->update($this->getFillables($this->competition));
        return $this->competition;
    }
}
