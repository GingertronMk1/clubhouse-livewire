<?php

namespace Tests\Feature\Livewire;

use App\Livewire\CreateEditPerson;
use Livewire\Livewire;
use Tests\TestCase;

/**
 * @internal
 *
 * @coversNothing
 */
class CreateEditPersonTest extends TestCase
{
    /** @test */
    public function rendersSuccessfully()
    {
        Livewire::test(CreateEditPerson::class)
            ->assertStatus(200)
        ;
    }
}
