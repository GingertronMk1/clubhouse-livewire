<?php

namespace Tests\Feature\Livewire\Game;

use App\Livewire\Game\CreateGame;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class CreateGameTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(CreateGame::class)
            ->assertStatus(200);
    }
}
