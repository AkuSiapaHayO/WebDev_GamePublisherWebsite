<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Platform;

class PlatformSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Platform::create(['name' => 'Windows','p_image'=> 'pc.png']);    
        Platform::create(['name' => 'Xbox','p_image'=> 'xbox.png']);
        Platform::create(['name' => 'PlayStation','p_image'=> 'playstation.png']);
        Platform::create(['name' => 'Nintendo', 'p_image' => 'nintendo.png']);
    }
}
