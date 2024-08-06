<?php

namespace Tests\Feature\Livewire\Competition;

use App\Livewire\Competition\CreateCompetition;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class CreateCompetitionTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(CreateCompetition::class)
            ->assertStatus(200);
    }
}
