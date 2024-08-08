<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Position>
 */
class PositionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->domainWord(),
            'description' => $this->faker->paragraphs(3, true),
            'preview_x' => $this->faker->numberBetween(0, 100),
            'preview_y' => $this->faker->numberBetween(0, 100),
            'sort_order' => $this->faker->numberBetween(0, 100),
            'default_number' => $this->faker->numberBetween(0, 100),
        ];
    }
}
