<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create(['name' => 'Action']);
        Genre::create(['name' => 'Adventure']);
        Genre::create(['name' => 'RPG']);
        Genre::create(['name' => 'Simulation']);
        Genre::create(['name' => 'Strategy']);
        Genre::create(['name' => 'Sports']);
        Genre::create(['name' => 'Shooter']);
        Genre::create(['name' => 'Survival-Horror']);
        Genre::create(['name' => 'Open-World']);
        Genre::create(['name' => 'City-Building']);
    }
}
