<?php

namespace App\Livewire\Position;

use App\Livewire\Forms\PositionForm;
use App\Models\Sport;
use Livewire\Attributes\Computed;
use Livewire\Component;

class CreatePosition extends Component
{
    public PositionForm $form;
    public ?Sport $sport;

    public const MAX_PERCENT = 100;
    public const PREVIEW_BOUND = 5;

    public function mount(?Sport $sport)
    {
        $this->sport = $sport;
    }

    private function boundValue(int $n): float
    {
        $min = self::PREVIEW_BOUND;
        $max = self::MAX_PERCENT - self::PREVIEW_BOUND;

        return $min + ($n * ($max - $min)) / self::MAX_PERCENT;
    }

    #[Computed]
    public function previewXBounded(): float
    {
        return $this->boundValue($this->form->previewX);
    }

    #[Computed]
    public function previewYBounded(): float
    {
        return $this->boundValue($this->form->previewY);
    }

    public function render()
    {
        return view('livewire.position.create-position')
            ->with('sports', Sport::all())
        ;
    }
}
