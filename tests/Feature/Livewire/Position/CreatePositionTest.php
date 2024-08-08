<?php

namespace Tests\Feature\Livewire\Position;

use App\Livewire\Position\CreatePosition;
use Livewire\Livewire;
use Tests\TestCase;

/**
 * @internal
 *
 * @coversNothing
 */
class CreatePositionTest extends TestCase
{
    /** @test */
    public function rendersSuccessfully()
    {
        Livewire::test(CreatePosition::class)
            ->assertStatus(200)
        ;
    }
}
