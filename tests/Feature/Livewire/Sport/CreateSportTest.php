<?php

namespace Tests\Feature\Livewire\Sport;

use App\Livewire\Sport\CreateSport;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class CreateSportTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(CreateSport::class)
            ->assertStatus(200);
    }
}
