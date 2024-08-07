<?php

namespace Tests\Feature\Livewire\Game;

use App\Livewire\Game\CreateGame;
use Livewire\Livewire;
use Tests\TestCase;

/**
 * @internal
 *
 * @coversNothing
 */
class CreateGameTest extends TestCase
{
    /** @test */
    public function rendersSuccessfully()
    {
        Livewire::test(CreateGame::class)
            ->assertStatus(200)
        ;
    }
}
