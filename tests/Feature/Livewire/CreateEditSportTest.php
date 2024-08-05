<?php

namespace Tests\Feature\Livewire;

use App\Livewire\CreateEditSport;
use Livewire\Livewire;
use Tests\TestCase;

/**
 * @internal
 *
 * @coversNothing
 */
class CreateEditSportTest extends TestCase
{
    /** @test */
    public function rendersSuccessfully()
    {
        Livewire::test(CreateEditSport::class)
            ->assertStatus(200)
        ;
    }
}
