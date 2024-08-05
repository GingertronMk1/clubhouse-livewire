<?php

namespace Tests\Feature\Livewire;

use App\Livewire\CreateEditGame;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class CreateEditGameTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(CreateEditGame::class)
            ->assertStatus(200);
    }
}
