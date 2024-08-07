<?php

namespace App\Livewire\Forms;

use App\Models\Sport;
use Livewire\Form;

class PositionForm extends Form {
    public string $name = '';
    public string $description = '';
    public int $previewX = 0;
    public int $previewY = 0;
    public int $sortOrder = 0;
    public int $defaultNumber = 0;
    public Sport $sport;
}
