<?php

namespace Tests\Feature\Livewire\Position;

use App\Livewire\Position\CreatePosition;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class CreatePositionTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(CreatePosition::class)
            ->assertStatus(200);
    }
}
