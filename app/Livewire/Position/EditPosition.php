<?php

namespace App\Livewire\Position;

use App\Livewire\Forms\PositionForm;
use App\Models\Position;
use App\Models\Sport;
use Livewire\Attributes\Computed;
use Livewire\Component;

class EditPosition extends Component
{
    public PositionForm $form;
    public ?Sport $sport;

    public const MAX_PERCENT = 100;
    public const PREVIEW_BOUND = 5;

    public function save(): void
    {
        $position = $this->form->update();
        $this->redirectRoute('sport.position.edit', ['sport' => $position->sport, 'position' => $position]);
    }

    public function mount(?Sport $sport, Position $position): void
    {
        $this->form->sport = $sport;
        $this->form->setPosition($position);
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
        return $this->boundValue($this->form->preview_x);
    }

    #[Computed]
    public function previewYBounded(): float
    {
        return $this->boundValue($this->form->preview_y);
    }

    public function render()
    {
        return view('livewire.position.edit-position');
    }
}
