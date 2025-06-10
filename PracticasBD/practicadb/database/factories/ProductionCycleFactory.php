<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Hive;
use App\Models\Beekeeper;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\productionCycle>
 */
class ProductionCycleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'hive_id' => Hive::InRandomOrder()->first()->id,       
            'beekeeper_id' => Beekeeper::InRandomOrder()->first()->id,   
            'start_date'=> fake()->dateTimeBetween('-10 years', 'now')->format('Y-m-d'), 
            'end_date' => fake()->dateTimeBetween('-10 years', 'now')->format('Y-m-d'),  
            'status' => fake()->words(1, true)
        ];
    }
}
