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
    public function update(): Team
    {
        $this->validate();
        $this->team->update($this->all());

        return $this->team;
    }
}
