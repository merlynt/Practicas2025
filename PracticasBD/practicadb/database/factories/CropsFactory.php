<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Crops>
 */
class CropsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'crop' => fake()->words(1, true),
            'pollination_date' => fake()->dateTimeBetween('-10 years', 'now')->format('Y-m-d'),
            'conditions' => fake()->words(3, true)
        ];
    }
}
