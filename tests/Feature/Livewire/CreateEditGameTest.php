<?php

namespace Tests\Feature\Livewire;

use App\Livewire\CreateEditGame;
use Livewire\Livewire;
use Tests\TestCase;

/**
 * @internal
 *
 * @coversNothing
 */
class CreateEditGameTest extends TestCase
{
    /** @test */
    public function rendersSuccessfully()
    {
        Livewire::test(CreateEditGame::class)
            ->assertStatus(200)
        ;
    }
}
