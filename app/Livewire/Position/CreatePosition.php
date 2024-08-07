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
    public const MAX_PREVIEW_PERCENT = 90;
    public const MIN_PREVIEW_PERCENT = 10;
    public const SCALE_FACTOR_X = 10;
    public const SCALE_FACTOR_Y = 7;

    public function mount(?Sport $sport)
    {
        $this->sport = $sport;
    }

    private function boundValue(int $n): float
    {
        // lambda(n, ((90-10)*n / 100) + 10)
        return self::MIN_PREVIEW_PERCENT + ($n * (self::MAX_PREVIEW_PERCENT - self::MIN_PREVIEW_PERCENT))/self::MAX_PERCENT;
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
