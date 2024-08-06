<?php

namespace Tests\Feature\Livewire\Team;

use App\Livewire\Team\EditTeam;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class EditTeamTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(EditTeam::class)
            ->assertStatus(200);
    }
}
