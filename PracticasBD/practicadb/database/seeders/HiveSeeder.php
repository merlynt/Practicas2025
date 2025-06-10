<?php

namespace Database\Seeders;

use App\Models\Crops;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hive;

class HiveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            CropsSeeder::class
        ]);

        $crop = Crops::all();
        Hive::factory(5)->create()->each(function ($hive) use ($crop){
            $hive->crops()->attach(
                $crop->random(rand(1, 3))->pluck('id')->toArray()
            );
        });
    }
}
