<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Rating;

class RatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Rating::create(['name' => 'Everyone', 'r_image' => 'E.svg']);
        Rating::create(['name' => 'Everyone 10+', 'r_image' => 'E10.svg']);
        Rating::create(['name' => 'Mature', 'r_image' => 'M.svg']);
        Rating::create(['name' => 'Teen', 'r_image' => 'T.svg']);
        Rating::create(['name' => 'Adult', 'r_image' => 'A.svg']);
    }
}
