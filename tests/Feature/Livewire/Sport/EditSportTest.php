<?php

namespace Tests\Feature\Livewire\Sport;

use App\Livewire\Sport\EditSport;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class EditSportTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(EditSport::class)
            ->assertStatus(200);
    }
}
