<?php

namespace App\Livewire\Sport;

use App\Livewire\Forms\SportForm;
use Livewire\Component;

class CreateSport extends Component
{
    public SportForm $form;

    public function save()
    {
        $sport = $this->form->save();
        $this->redirectRoute('sport.position.create', ['sport' => $sport]);
    }

    public function render()
    {
        return view('livewire.sport.create-sport');
    }
}
