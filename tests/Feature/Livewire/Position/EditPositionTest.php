<?php

namespace Tests\Feature\Livewire\Position;

use App\Livewire\Position\EditPosition;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class EditPositionTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(EditPosition::class)
            ->assertStatus(200);
    }
}
