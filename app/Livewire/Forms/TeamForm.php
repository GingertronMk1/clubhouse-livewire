<?php

namespace App\Livewire\Forms;

use App\Models\Team;
use Illuminate\Validation\ValidationException;
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

    /**
     * @throws ValidationException
     */
    public function create(): Team
    {
        $this->validate();
        return Team::create($this->all());
    }

    /**
     * @throws ValidationException
     */
    public function update(): false|Team
    {
        $this->validate();
        $updated = $this->team->update($this->all());

        if ($updated) {
            return $this->team;
        }

        return false;
    }
}
