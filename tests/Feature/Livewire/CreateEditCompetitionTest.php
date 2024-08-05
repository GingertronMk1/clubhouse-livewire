<?php

namespace Tests\Feature\Livewire;

use App\Livewire\CreateEditCompetition;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class CreateEditCompetitionTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(CreateEditCompetition::class)
            ->assertStatus(200);
    }
}
