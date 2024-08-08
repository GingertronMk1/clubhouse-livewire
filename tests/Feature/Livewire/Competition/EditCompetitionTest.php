<?php

namespace Tests\Feature\Livewire\Competition;

use App\Livewire\Competition\EditCompetition;
use Livewire\Livewire;
use Tests\TestCase;

/**
 * @internal
 *
 * @coversNothing
 */
class EditCompetitionTest extends TestCase
{
    /** @test */
    public function rendersSuccessfully()
    {
        Livewire::test(EditCompetition::class)
            ->assertStatus(200)
        ;
    }
}
