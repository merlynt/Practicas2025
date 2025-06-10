<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Hive;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HealthTreatment>
 */
class HealthTreatmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'treatment' => fake()->words(1, true),
            'type' => fake()->words(1, true),
            'instructions' =>fake()->words(5, true),
            'hive_id' => Hive::inRandomOrder()->first()->id
        ];
    }
}

