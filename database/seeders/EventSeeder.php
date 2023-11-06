<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Event::create([
            'e_image' => 'event_1.png'
        ]);

        Event::create([
            'e_image' => 'event_2.jpg'
        ]);

        Event::create([
            'e_image' => 'event_3.jpg'
        ]);

        Event::create([
            'e_image' => 'event_4.jpg'
        ]);

        Event::create([
            'e_image' => 'event_5.jpg'
        ]);

        Event::create([
            'e_image' => 'event_6.jpg'
        ]);

        Event::create([
            'e_image' => 'event_7.jpg'
        ]);
    }
}
