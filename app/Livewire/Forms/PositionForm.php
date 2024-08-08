<?php

namespace App\Livewire\Forms;

use App\Models\Position;
use App\Models\Sport;

class PositionForm extends BaseForm
{
    public ?Position $position = null;
    public string $name = '';
    public string $description = '';
    public int $preview_x = 0;
    public int $preview_y = 0;
    public int $sort_order = 0;
    public int $default_number = 0;
    public Sport $sport;

    public function setPosition(Position $position): void
    {
        $this->position = $position;
        $this->sport = $position->sport;
        $this->name = $position->name;
        $this->description = $position->description;
        $this->preview_x = $position->preview_x;
        $this->preview_y = $position->preview_y;
        $this->sort_order = $position->sort_order;
        $this->default_number = $position->default_number;
    }

    public function create(): Position
    {
        return $this->sport->positions()->create($this->getFillables(Position::class));
    }

    public function update(): Position
    {
        $this->position->update($this->getFillables(Position::class));
        return $this->position;
    }
}
