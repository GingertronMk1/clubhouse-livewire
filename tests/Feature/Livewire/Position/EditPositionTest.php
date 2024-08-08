<?php

namespace Tests\Feature\Livewire\Position;

use App\Livewire\Position\EditPosition;
use Livewire\Livewire;
use Tests\TestCase;

/**
 * @internal
 *
 * @coversNothing
 */
class EditPositionTest extends TestCase
{
    /** @test */
    public function rendersSuccessfully()
    {
        Livewire::test(EditPosition::class)
            ->assertStatus(200)
        ;
    }
}
