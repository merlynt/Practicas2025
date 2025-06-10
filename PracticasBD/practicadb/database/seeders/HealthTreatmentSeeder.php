<?php

namespace Database\Seeders;

use Database\Factories\HealthTreatmentFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\HealthTreatment;
class HealthTreatmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HealthTreatment::factory(5)->create();
    }
}
