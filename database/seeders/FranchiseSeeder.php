<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Franchise;

class FranchiseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Franchise::create([
            'name' => 'Warcraft',
            'description' => "The 'Warcraft' franchise, developed by Blizzard Entertainment, 
                            is a legendary series of real-time strategy and massively multiplayer 
                            online role-playing games (MMORPGs). Known for its epic fantasy world 
                            of Azeroth, 'Warcraft' has captivated gamers with its rich lore, 
                            memorable characters, and intense battles between the Alliance and 
                            the Horde.",
            'f_image' => 'warcraft.png',
        ]);

        Franchise::create([
            'name' => 'Resident Evil',
            'description' => "'Resident Evil', by Capcom, is a groundbreaking survival horror 
                            series that introduced gamers to the world of zombies and bio-organic 
                            weapons. The franchise has terrified players for decades with its 
                            atmospheric tension, intricate puzzles, and thrilling narratives 
                            as they navigate through outbreaks of viral horrors.",
            'f_image' => 'resident_evil_logo.png',
        ]);

        Franchise::create([
            'name' => "Assassin's Creed",
            'description' => "Ubisoft's 'Assassin's Creed' franchise has redefined historical
                             action-adventure gaming. Players become skilled assassins, exploring 
                             various historical periods and locales, from Renaissance Italy to 
                             ancient Egypt. With a mix of stealth, parkour, and historical intrigue, 
                             'Assassin's Creed' offers a unique and immersive experience.",
            'f_image' => 'assassins_creed_logo.png',
        ]);

        Franchise::create([
            'name' => 'Farcry',
            'description' => "The 'Far Cry' series, also by Ubisoft, is celebrated for its 
                            open-world first-person shooters set in exotic and dangerous locales. 
                            Each game offers intense combat, wild environments, and complex 
                            narratives as players confront dangerous adversaries and navigate 
                            the unpredictable wilderness.",
            'f_image' => 'farcry_logo.png',
        ]); 
    }
}
