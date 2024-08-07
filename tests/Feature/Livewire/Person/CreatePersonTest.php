<?php

namespace Tests\Feature\Livewire\Person;

use App\Livewire\Person\CreatePerson;
use Livewire\Livewire;
use Tests\TestCase;

/**
 * @internal
 *
 * @coversNothing
 */
class CreatePersonTest extends TestCase
{
    /** @test */
    public function rendersSuccessfully()
    {
        Livewire::test(CreatePerson::class)
            ->assertStatus(200)
        ;
    }
}
