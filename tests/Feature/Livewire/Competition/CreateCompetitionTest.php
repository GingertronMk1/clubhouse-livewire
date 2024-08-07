<?php

namespace Tests\Feature\Livewire\Competition;

use App\Livewire\Competition\CreateCompetition;
use Livewire\Livewire;
use Tests\TestCase;

/**
 * @internal
 *
 * @coversNothing
 */
class CreateCompetitionTest extends TestCase
{
    /** @test */
    public function rendersSuccessfully()
    {
        Livewire::test(CreateCompetition::class)
            ->assertStatus(200)
        ;
    }
}
