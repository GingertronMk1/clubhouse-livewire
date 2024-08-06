<?php

namespace Tests\Feature\Livewire\Competition;

use App\Livewire\Competition\EditCompetition;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class EditCompetitionTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(EditCompetition::class)
            ->assertStatus(200);
    }
}
