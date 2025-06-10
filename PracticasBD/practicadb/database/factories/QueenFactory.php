<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Hive;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Queen>
 */
class QueenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->name(),
            'age' =>rand(1, 7),
            'hive_id'=>Hive::inRandomOrder()->first()->id,
        ];
    }
}
