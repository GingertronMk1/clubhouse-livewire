<?php

namespace App\Livewire\Forms;

use App\Models\Team;
use Illuminate\Validation\ValidationException;

class TeamForm extends BaseForm
{
    public ?Team $team = null;
    public string $name = '';
    public string $description = '';
    public string $colour = '#FFFFFF';

    public function setTeam(Team $team): void
    {
        $this->team = $team;
        $this->name = $team->name;
        $this->description = $team->description;
        $this->colour = $team->colour;
    }

    public function create(): Team
    {
        return Team::create($this->getFillables(Team::class));
    }

    public function update(): Team
    {
        $this->team->update($this->getFillables($this->team));

        return $this->team;
    }
}
