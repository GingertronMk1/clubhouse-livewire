<?php

namespace Tests\Feature\Livewire;

use App\Livewire\CreateEditPerson;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class CreateEditPersonTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(CreateEditPerson::class)
            ->assertStatus(200);
    }
}
