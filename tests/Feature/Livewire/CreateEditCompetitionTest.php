<?php

namespace Tests\Feature\Livewire;

use App\Livewire\CreateEditCompetition;
use Livewire\Livewire;
use Tests\TestCase;

/**
 * @internal
 *
 * @coversNothing
 */
class CreateEditCompetitionTest extends TestCase
{
    /** @test */
    public function rendersSuccessfully()
    {
        Livewire::test(CreateEditCompetition::class)
            ->assertStatus(200)
        ;
    }
}
