<?php

namespace Tests\Feature\Livewire\Person;

use App\Livewire\Person\EditPerson;
use Livewire\Livewire;
use Tests\TestCase;

/**
 * @internal
 *
 * @coversNothing
 */
class EditPersonTest extends TestCase
{
    /** @test */
    public function rendersSuccessfully()
    {
        Livewire::test(EditPerson::class)
            ->assertStatus(200)
        ;
    }
}
