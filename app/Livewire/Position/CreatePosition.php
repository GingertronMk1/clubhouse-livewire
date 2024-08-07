<?php

namespace App\Livewire\Position;

use App\Livewire\Forms\PositionForm;
use App\Models\Sport;
use Livewire\Component;

class CreatePosition extends Component
{
    public PositionForm $form;
    public ?Sport $sport;

    public function mount(?Sport $sport)
    {
        $this->sport = $sport;
    }

    public function render()
    {
        return view('livewire.position.create-position')
            ->with('sports', Sport::all())
            ;
    }
}
