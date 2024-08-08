<?php

namespace Database\Factories;

use App\Models\Competition;
use App\Models\Sport;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Competition>
 */
class CompetitionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->citySuffix(),
            'description' => $this->faker->text(),
            'sport_id' => Sport::factory(),
            'parent_id' => $this->faker->boolean(33) ? Competition::factory() : null,
        ];
    }
}
