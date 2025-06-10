<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ProductionCycle;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\honeyBatche>
 */
class HoneyBatcheFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'production_cycle_id' => ProductionCycle::inRandomOrder()->first()->id,
            'grams' => fake()->numberBetween(100, 500),
            'container' => fake()->words(1, true),
        ];
    }
}
