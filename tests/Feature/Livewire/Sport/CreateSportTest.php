<?php

namespace Tests\Feature\Livewire\Sport;

use App\Livewire\Sport\CreateSport;
use Livewire\Livewire;
use Tests\TestCase;

/**
 * @internal
 *
 * @coversNothing
 */
class CreateSportTest extends TestCase
{
    /** @test */
    public function rendersSuccessfully()
    {
        Livewire::test(CreateSport::class)
            ->assertStatus(200)
        ;
    }
}
