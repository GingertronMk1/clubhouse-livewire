<?php

namespace App\Livewire\Forms;

use App\Models\Team;
use Livewire\Form;

class TeamForm extends Form
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
        return Team::create([
            'name' => $this->name,
            'description' => $this->description,
            'colour' => $this->colour,
        ]);
    }

    public function update(): false|Team
    {
        $updated = $this->team->update([
            'name' => $this->name,
            'description' => $this->description,
            'colour' => $this->colour,
        ]);

        if ($updated) {
            return $this->team;
        }

        return false;
    }
}
