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
        Rating::create(['name' => 'E', 'r_image' => 'E.svg']);
        Rating::create(['name' => 'E10', 'r_image' => 'E10.svg']);
        Rating::create(['name' => 'M', 'r_image' => 'M.svg']);
        Rating::create(['name' => 'T', 'r_image' => 'T.svg']);
        Rating::create(['name' => 'A', 'r_image' => 'A.svg']);
    }
}
