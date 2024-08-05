<?php

namespace Tests\Feature\Livewire;

use App\Livewire\CreateEditSport;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class CreateEditSportTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(CreateEditSport::class)
            ->assertStatus(200);
    }
}
