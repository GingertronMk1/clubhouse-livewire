<?php

namespace Tests\Feature\Livewire;

use App\Livewire\CreateEditPosition;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class CreateEditPositionTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(CreateEditPosition::class)
            ->assertStatus(200);
    }
}
