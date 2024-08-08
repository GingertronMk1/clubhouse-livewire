<?php

namespace Database\Factories;

use App\Models\Competition;
use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Game>
 */
class GameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->company(),
            'start' => $this->faker->dateTime(),
            'description' => $this->faker->paragraphs(3, true),
            'summary' => $this->faker->paragraphs(3, true),
            'team_1_id' => Team::factory(),
            'team_2_id' => Team::factory(),
            'competition_id' => Competition::factory(),
        ];
    }
}
