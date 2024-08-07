<?php

namespace Tests\Feature\Livewire\Team;

use App\Livewire\Team\CreateTeam;
use Livewire\Livewire;
use Tests\TestCase;

/**
 * @internal
 *
 * @coversNothing
 */
class CreateTeamTest extends TestCase
{
    /** @test */
    public function rendersSuccessfully()
    {
        Livewire::test(CreateTeam::class)
            ->assertStatus(200)
        ;
    }
}
