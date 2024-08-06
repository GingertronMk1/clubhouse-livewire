<?php

namespace Tests\Feature\Livewire\Person;

use App\Livewire\Person\EditPerson;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class EditPersonTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(EditPerson::class)
            ->assertStatus(200);
    }
}
