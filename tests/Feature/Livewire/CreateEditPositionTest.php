<?php

namespace Tests\Feature\Livewire;

use App\Livewire\CreateEditPosition;
use Livewire\Livewire;
use Tests\TestCase;

/**
 * @internal
 *
 * @coversNothing
 */
class CreateEditPositionTest extends TestCase
{
    /** @test */
    public function rendersSuccessfully()
    {
        Livewire::test(CreateEditPosition::class)
            ->assertStatus(200)
        ;
    }
}
