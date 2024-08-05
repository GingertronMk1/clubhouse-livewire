<?php

namespace Tests\Feature\Livewire;

use App\Livewire\CreateEditTeam;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class CreateEditTeamTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(CreateEditTeam::class)
            ->assertStatus(200);
    }
}
