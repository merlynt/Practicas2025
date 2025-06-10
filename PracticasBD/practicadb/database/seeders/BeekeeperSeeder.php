<?php

namespace Database\Seeders;

use App\Models\Beekeeper;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BeekeeperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Beekeeper::factory(5)->create();
    }
}
