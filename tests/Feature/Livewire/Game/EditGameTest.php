<?php

namespace Tests\Feature\Livewire\Game;

use App\Livewire\Game\EditGame;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class EditGameTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(EditGame::class)
            ->assertStatus(200);
    }
}
