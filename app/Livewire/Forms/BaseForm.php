<?php

namespace App\Livewire\Forms;

use Illuminate\Database\Eloquent\Model;
use Livewire\Form;

class BaseForm extends Form
{
    protected function getFillables(Model|string $model): array
    {
        if (is_string($model) && is_subclass_of($model, Model::class)) {
            $model = new $model();
        }

        return array_filter(
            $this->all(),
            fn ($key) => $model->isFillable($key),
            ARRAY_FILTER_USE_KEY
        );
    }
}
