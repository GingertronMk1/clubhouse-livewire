<?php

namespace Tests\Feature\Livewire\Person;

use App\Livewire\Person\CreatePerson;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class CreatePersonTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(CreatePerson::class)
            ->assertStatus(200);
    }
}
