<?php

namespace Tests\Feature\Livewire\Team;

use App\Livewire\Team\EditTeam;
use Livewire\Livewire;
use Tests\TestCase;

/**
 * @internal
 *
 * @coversNothing
 */
class EditTeamTest extends TestCase
{
    /** @test */
    public function rendersSuccessfully()
    {
        Livewire::test(EditTeam::class)
            ->assertStatus(200)
        ;
    }
}
