<?php

namespace Database\Seeders;

use App\Models\Competition;
use App\Models\Game;
use App\Models\Person;
use App\Models\Position;
use App\Models\Sport;
use App\Models\Team;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->has(Person::factory())->create();

        Sport::factory(10)
            ->has(Position::factory(10))
            ->has(
                Competition::factory(10)
                    ->has(
                        Game::factory(10)
                    )
            )
            ->create()
        ;


    }
}
