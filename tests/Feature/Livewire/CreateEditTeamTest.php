<?php

namespace Tests\Feature\Livewire;

use App\Livewire\CreateEditTeam;
use Livewire\Livewire;
use Tests\TestCase;

/**
 * @internal
 *
 * @coversNothing
 */
class CreateEditTeamTest extends TestCase
{
    /** @test */
    public function rendersSuccessfully()
    {
        Livewire::test(CreateEditTeam::class)
            ->assertStatus(200)
        ;
    }
}
