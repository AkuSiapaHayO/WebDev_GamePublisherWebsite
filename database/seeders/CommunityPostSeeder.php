<?php

namespace Database\Seeders;

use App\Models\CommunityPost;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommunityPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $post1 = CommunityPost::create([
            "title" => "The Art of Stealth: Unraveling the Legacy of Assassin's Creed",
            "author" => "Louis Luigi",
            "description" => "Delve into the world of hidden blades and historical conspiracies as we explore the impact of the Assassin's Creed series on gaming.",
            "date" => "13 Nov 2023",
            "main_img" => "post1.jpg"
        ]);

        $post2 = CommunityPost::create([
            "title" => "Outlaws and Legends: Red Dead Redemption 2's Impact on Western Gaming",
            "author" => "Gerald Geraldino",
            "description" => "Saddle up for an exploration of the untamed frontier as we dissect the cultural and gaming impact of Red Dead Redemption 2.",
            "date" => "12 Oct 2023",
            "main_img" => "post2.jpg"
        ]);

        $post3 = CommunityPost::create([
            "title" => "Survival Horror Resurrected: Resident Evil 4 Remake",
            "author" => "Jessica Parker",
            "description" => "Brace yourself for a spine-chilling experience as we anticipate the remake of the classic Resident Evil 4 and its impact on the horror genre.",
            "date" => "17 Jan 2023",
            "main_img" => "post3.jpg"
        ]);

        $post4 = CommunityPost::create([
            "title" => "Warcraft's Enduring Legacy: A Look Back and Forward",
            "author" => "Morgan White",
            "description" => "Celebrate the legacy of the Warcraft series and its impact on the gaming industry, exploring the journey from the original to the Reforged edition.",
            "date" => "28 Feb 2023",
            "main_img" => "post4.jpg"
        ]);

        $post5 = CommunityPost::create([
            "title" => "Far Cry Franchise: A Journey Through Chaos",
            "author" => "Casey Martin",
            "description" => "Trace the chaotic evolution of the Far Cry series and its thematic exploration of disorder and revolution.",
            "date" => "29 Dec 2022",
            "main_img" => "post5.jpeg"
        ]);

        $post6 = CommunityPost::create([
            "title" => "Pandora's Wonders: The Making of Avatar's Virtual Universe",
            "author" => "Jamie Mitchell",
            "description" => "Go behind the scenes of the game development process for 'Avatar: Frontiers of Pandora' and discover the technology bringing Pandora to life.",
            "date" => "17 Nov 2022",
            "main_img" => "post6.jpeg"
        ]);

        $post7 = CommunityPost::create([
            "title" => "Building Empires: Anno 1800 City Planning Strategies",
            "author" => "Emily Johnson",
            "description" => "Learn the art of city planning and industrial development in Anno 1800 as we uncover the strategies behind building successful empires.",
            "date" => "22 Mar 2023",
            "main_img" => "post7.jpg"
        ]);

        $post8 = CommunityPost::create([
            "title" => "Assassin's Creed Chronicles: A Journey Through Time",
            "author" => "Alex Smith",
            "description" => "Explore the lesser-known chapters of the Assassin's Creed saga as we delve into the world of Assassin's Creed Chronicles.",
            "date" => "14 Apr 2023",
            "main_img" => "post8.jpg"
        ]);

        $post9 = CommunityPost::create([
            "title" => "Raccoon City Reimagined: Resident Evil 2 Remake's Terrifying Triumph",
            "author" => "Cameron Miller",
            "description" => "Navigate the harrowing streets of Raccoon City as we reflect on the success and scares of the Resident Evil 2 Remake.",
            "date" => "15 Feb 2023",
            "main_img" => "post9.jpeg"
        ]);

        $post10 = CommunityPost::create([
            "title" => "10 Things You Might've Missed on your First Assassin's Creed Mirage Playthrough",
            "author" => "Gavin Gavin",
            "description" => "The vast open-world aspect of Assassin's Creed Mirage would leave first-time players missing out on these amazing easter eggs.",
            "date" => "13 Jul 2023",
            "main_img" => "post10.jpg"
        ]);
    }
}