<?php

namespace Tests\Feature\Livewire\Game;

use App\Livewire\Game\EditGame;
use Livewire\Livewire;
use Tests\TestCase;

/**
 * @internal
 *
 * @coversNothing
 */
class EditGameTest extends TestCase
{
    /** @test */
    public function rendersSuccessfully()
    {
        Livewire::test(EditGame::class)
            ->assertStatus(200)
        ;
    }
}
