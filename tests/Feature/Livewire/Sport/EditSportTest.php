<?php

namespace Tests\Feature\Livewire\Sport;

use App\Livewire\Sport\EditSport;
use Livewire\Livewire;
use Tests\TestCase;

/**
 * @internal
 *
 * @coversNothing
 */
class EditSportTest extends TestCase
{
    /** @test */
    public function rendersSuccessfully()
    {
        Livewire::test(EditSport::class)
            ->assertStatus(200)
        ;
    }
}
