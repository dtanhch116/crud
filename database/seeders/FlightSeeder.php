<?php

namespace Database\Seeders;

use App\Models\Flights;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Flights::factory()->count(50)->create();
    }
}
