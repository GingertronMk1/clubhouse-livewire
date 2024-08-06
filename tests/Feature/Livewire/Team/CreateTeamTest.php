<?php

namespace Tests\Feature\Livewire\Team;

use App\Livewire\Team\CreateTeam;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class CreateTeamTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(CreateTeam::class)
            ->assertStatus(200);
    }
}
