<?php

namespace Database\Seeders;

use App\Models\Franchise;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Game;
use App\Models\Genre;
use App\Models\Platform;
use App\Models\Rating;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genres = Genre::all();
        $platforms = Platform::all();
        $ratings = Rating::all();
        $franchise = Franchise::all();

        $game1 = Game::create([
            'title' => "Assassin's Creed Mirage",
            'description' => 'Embark on a thrilling journey through an ancient desert city as a master assassin, unravelling a web of secrets in this open-world adventure, with stunning visuals and stealthy gameplay',
            'releaseDate' => '2023-01-15',
            'price' => 49.99,
            'g_image' => 'assassins_creed_mirage.jpg',
            'background_image'=> 'assassins_creed_mirage.png',
            'processor' => 'Intel Core i5',
            'gpu' => 'NVIDIA GeForce GTX 1060',
            'ram' => '8GB',
            'storage' => '50GB',
            'rating_id' => $ratings->where('name', 'Mature')->first()->id,
            'franchise_id' => $franchise->where('name', "Assassin's Creed")->first()->id,
        ]);
        $game1->genres()->attach([
            $genres->where('name', 'Action')->first()->id, 
            $genres->where('name', 'Adventure')->first()->id, 
            $genres->where('name', 'Open-World')->first()->id
        ]);
        $game1->platforms()->attach([
            $platforms->where('name', 'Windows')->first()->id, 
            $platforms->where('name', 'Xbox')->first()->id,
            $platforms->where('name', 'PlayStation')->first()->id
        ]);

        $game2 = Game::create([
            'title' => 'Anno 1800',
            'description' => 'Build and manage a bustling 19th-century metropolis, balancing industry, trade, and diplomacy in this city-building strategy game. Explore the dawn of the industrial age in a beautifully detailed world.',
            'releaseDate' => '2023-02-20',
            'price' => 59.99,
            'g_image' => 'anno_1800.jpg',
            'background_image'=> 'anno_1800.jpg',
            'processor' => 'Intel Core i7',
            'gpu' => 'NVIDIA GeForce RTX 2070',
            'ram' => '16GB',
            'storage' => '60GB',
            'rating_id' => $ratings->where('name', 'Everyone')->first()->id,
            'franchise_id' => null,
        ]);
        $game2->genres()->attach([
            $genres->where('name', 'City-Building')->first()->id, 
            $genres->where('name', 'Strategy')->first()->id
        ]);
        $game2->platforms()->attach([
            $platforms->where('name', 'Windows')->first()->id,
        ]);

        $game3 = Game::create([
            'title' => 'Avatar: Frontiers of Pandora',
            'description' => "Immerse yourself in the vibrant world of Pandora as you join the Na'vi in an epic quest to protect their home. Experience breathtaking visuals and engage in intense battles in this action-adventure.",
            'releaseDate' => '2023-03-25',
            'price' => 69.99,
            'g_image' => 'avatar_frontiers_of_pandora.jpg',
            'background_image'=> 'avatar.jpg',
            'processor' => 'Intel Core i9',
            'gpu' => 'NVIDIA GeForce RTX 3080',
            'ram' => '32GB',
            'storage' => '100GB',
            'rating_id' => $ratings->where('name', 'Teen')->first()->id,
            'franchise_id' => null,
        ]);
        $game3->genres()->attach([
            $genres->where('name', 'Action')->first()->id, 
            $genres->where('name', 'Adventure')->first()->id, 
        ]);
        $game3->platforms()->attach([
            $platforms->where('name', 'Windows')->first()->id, 
            $platforms->where('name', 'Xbox')->first()->id,
            $platforms->where('name', 'PlayStation')->first()->id
        ]);

        $game4 = Game::create([
            'title' => 'Far Cry 6',
            'description' => 'Lead a guerrilla revolution against a ruthless dictator on the tropical island of Yara. Harness unconventional weapons and explore a captivating open world filled with chaos and intrigue.',
            'releaseDate' => '2023-10-07',
            'price' => 59.99,
            'g_image' => 'farcry_6.jpg',
            'background_image'=> 'farcry_6.jpg',
            'processor' => 'Intel Core i5',
            'gpu' => 'NVIDIA GeForce GTX 1060',
            'ram' => '8GB',
            'storage' => '50GB',
            'rating_id' => $ratings->where('name', 'Mature')->first()->id, 
            'franchise_id' => $franchise->where('name', 'Farcry')->first()->id,
        ]);
        $game4->genres()->attach([
            $genres->where('name', 'Shooter')->first()->id, 
            $genres->where('name', 'Open-World')->first()->id
        ]);
        $game4->platforms()->attach([
            $platforms->where('name', 'Windows')->first()->id, 
            $platforms->where('name', 'Xbox')->first()->id,
            $platforms->where('name', 'PlayStation')->first()->id
        ]);

        $game5 = Game::create([
            'title' => 'Red Dead Redemption 2',
            'description' => 'Set in the American Wild West, this epic tale of outlaws and redemption offers stunning realism and a vast, immersive open world. Live the life of Arthur Morgan in a changing and unforgiving frontier.',
            'releaseDate' => '2018-10-26',
            'price' => 49.99,
            'g_image' => 'red_dead_redemption_2.jpg',
            'background_image'=> 'red_dead_redemption_2.jpg',
            'processor' => 'Intel Core i7',
            'gpu' => 'NVIDIA GeForce RTX 2070',
            'ram' => '16GB',
            'storage' => '150GB',
            'rating_id' => $ratings->where('name', 'Mature')->first()->id,
            'franchise_id' => null,
        ]);
        $game5->genres()->attach([
            $genres->where('name', 'Action')->first()->id, 
            $genres->where('name', 'Adventure')->first()->id, 
            $genres->where('name', 'Open-World')->first()->id
        ]);
        $game5->platforms()->attach([
            $platforms->where('name', 'Windows')->first()->id, 
            $platforms->where('name', 'Xbox')->first()->id,
            $platforms->where('name', 'PlayStation')->first()->id
        ]);

        $game6 = Game::create([
            'title' => 'Warcraft 3: Reforged',
            'description' => 'Revisit the classic RTS game with modern graphics and enhanced gameplay. Command armies, build empires, and engage in epic battles in the high-fantasy world of Azeroth.',
            'releaseDate' => '2020-01-28',
            'price' => 29.99,
            'g_image' => 'warcraft_3_reforged.jpg',
            'background_image'=> 'warcraft_3_reforged.jpg',
            'processor' => 'Intel Core i3',
            'gpu' => 'NVIDIA GeForce 8800',
            'ram' => '4GB',
            'storage' => '30GB',
            'rating_id' => $ratings->where('name', 'Everyone 10+')->first()->id,
            'franchise_id' => $franchise->where('name', "Warcraft")->first()->id,
            
        ]);
        $game6->genres()->attach([
            $genres->where('name', 'Strategy')->first()->id,
        ]);
        $game6->platforms()->attach([
            $platforms->where('name', 'Windows')->first()->id,
        ]);

        $game7 = Game::create([
            'title' => 'Resident Evil 4 Remake',
            'description' => "Return to the iconic survival horror classic, now beautifully reimagined. Face terrifying creatures and solve intricate puzzles in a desperate quest to rescue the President's daughter.",
            'releaseDate' => '2023-09-22',
            'price' => 49.99,
            'g_image' => 'resident_evil_4_remake.jpg',
            'background_image'=> 'resident_evil_4_remake.jpg',
            'processor' => 'Intel Core i5',
            'gpu' => 'NVIDIA GeForce GTX 1060',
            'ram' => '8GB',
            'storage' => '30GB',
            'rating_id' => $ratings->where('name', 'Mature')->first()->id,
            'franchise_id' => $franchise->where('name', 'Resident Evil')->first()->id,
        ]);
        $game7->genres()->attach([
            $genres->where('name', 'Action')->first()->id, 
            $genres->where('name', 'Adventure')->first()->id, 
            $genres->where('name', 'Survival-Horror')->first()->id
        ]);
        $game7->platforms()->attach([
            $platforms->where('name', 'Windows')->first()->id, 
            $platforms->where('name', 'Xbox')->first()->id,
            $platforms->where('name', 'PlayStation')->first()->id
        ]);
        
        $game8 = Game::create([
            'title' => 'Resident Evil 2 Remake',
            'description' => 'Experience the survival horror of Resident Evil 2 in a new way. Join Leon Kennedy and Claire Redfield in their fight against the zombie apocalypse in Raccoon City.',
            'releaseDate' => '2020-01-25',
            'price' => 39.99,
            'g_image' => 'resident_evil_2_remake.jpg',
            'background_image' => 'resident_evil_2_remake_background.jpg',
            'processor' => 'Intel Core i5',
            'gpu' => 'NVIDIA GeForce GTX 760',
            'ram' => '8GB',
            'storage' => '26GB',
            'rating_id' => $ratings->where('name', 'Mature')->first()->id,
            'franchise_id' => $franchise->where('name', 'Resident Evil')->first()->id,
        ]);
        $game8->genres()->attach([
            $genres->where('name', 'Action')->first()->id, 
            $genres->where('name', 'Adventure')->first()->id, 
            $genres->where('name', 'Survival-Horror')->first()->id
        ]);
        $game8->platforms()->attach([
            $platforms->where('name', 'Windows')->first()->id, 
            $platforms->where('name', 'Xbox')->first()->id,
            $platforms->where('name', 'PlayStation')->first()->id
        ]);

        $game9 = Game::create([
            'title' => 'Resident Evil 3 Remake',
            'description' => 'Return to Raccoon City in this reimagining of Resident Evil 3. Join Jill Valentine as she tries to escape the city and confront the relentless Nemesis.',
            'releaseDate' => '2020-04-03',
            'price' => 44.99,
            'g_image' => 'resident_evil_3_remake.jpg',
            'background_image' => 'resident_evil_3_remake_background.jpg',
            'processor' => 'Intel Core i5',
            'gpu' => 'NVIDIA GeForce GTX 760',
            'ram' => '8GB',
            'storage' => '45GB',
            'rating_id' => $ratings->where('name', 'Mature')->first()->id,
            'franchise_id' => $franchise->where('name', 'Resident Evil')->first()->id,
        ]);
        $game9->genres()->attach([
            $genres->where('name', 'Action')->first()->id, 
            $genres->where('name', 'Adventure')->first()->id, 
            $genres->where('name', 'Survival-Horror')->first()->id
        ]);
        $game9->platforms()->attach([
            $platforms->where('name', 'Windows')->first()->id, 
            $platforms->where('name', 'Xbox')->first()->id,
            $platforms->where('name', 'PlayStation')->first()->id
        ]);

        $game10 = Game::create([
            'title' => 'Resident Evil 7 Biohazard',
            'description' => 'Experience a new perspective on survival horror. Play as Ethan Winters and uncover the dark secrets of the Baker family in a rural Louisiana mansion.',
            'releaseDate' => '2017-01-24',
            'price' => 29.99,
            'g_image' => 'resident_evil_7_biohazard.jpg',
            'background_image' => 'resident_evil_7_biohazard_background.jpg',
            'processor' => 'Intel Core i5',
            'gpu' => 'NVIDIA GeForce GTX 760',
            'ram' => '8GB',
            'storage' => '24GB',
            'rating_id' => $ratings->where('name', 'Mature')->first()->id,
            'franchise_id' => $franchise->where('name', 'Resident Evil')->first()->id,
        ]);
        $game10->genres()->attach([
            $genres->where('name', 'Action')->first()->id, 
            $genres->where('name', 'Adventure')->first()->id, 
            $genres->where('name', 'Survival-Horror')->first()->id
        ]);
        $game10->platforms()->attach([
            $platforms->where('name', 'Windows')->first()->id, 
            $platforms->where('name', 'Xbox')->first()->id,
            $platforms->where('name', 'PlayStation')->first()->id
        ]);

        $game11 = Game::create([
            'title' => 'Resident Evil Village',
            'description' => 'Enter a mysterious and terrifying village in the latest installment of Resident Evil. Face new horrors and explore the sinister secrets of the village.',
            'releaseDate' => '2021-05-07',
            'price' => 49.99,
            'g_image' => 'resident_evil_village.jpg',
            'background_image' => 'resident_evil_village_background.jpg',
            'processor' => 'Intel Core i7',
            'gpu' => 'NVIDIA GeForce RTX 2070',
            'ram' => '16GB',
            'storage' => '45GB',
            'rating_id' => $ratings->where('name', 'Mature')->first()->id,
            'franchise_id' => $franchise->where('name', 'Resident Evil')->first()->id,
        ]);
        $game11->genres()->attach([
            $genres->where('name', 'Action')->first()->id, 
            $genres->where('name', 'Adventure')->first()->id, 
            $genres->where('name', 'Survival-Horror')->first()->id
        ]);
        $game11->platforms()->attach([
            $platforms->where('name', 'Windows')->first()->id, 
            $platforms->where('name', 'Xbox')->first()->id,
            $platforms->where('name', 'PlayStation')->first()->id
        ]);

        $game12 = Game::create([
            'title' => 'Far Cry 2',
            'description' => "Embark on a gritty and realistic open-world adventure in an African setting. As a mercenary, you'll face conflict and turmoil in a war-torn land.",
            'releaseDate' => '2008-10-21',
            'price' => 19.99,
            'g_image' => 'far_cry_2.jpg',
            'background_image' => 'far_cry_2_background.jpg',
            'processor' => 'Intel Core 2 Duo',
            'gpu' => 'NVIDIA GeForce 8800',
            'ram' => '2GB',
            'storage' => '12GB',,
            'rating_id' => $ratings->where('name', 'Mature')->first()->id, 
            'franchise_id' => $franchise->where('name', 'Farcry')->first()->id,
        ]);
        $game12->genres()->attach([
            $genres->where('name', 'Shooter')->first()->id, 
            $genres->where('name', 'Open-World')->first()->id
        ]);
        $game12->platforms()->attach([
            $platforms->where('name', 'Windows')->first()->id, 
            $platforms->where('name', 'Xbox')->first()->id,
            $platforms->where('name', 'PlayStation')->first()->id
        ]);

        $game13 = Game::create([
            'title' => 'Far Cry 3',
            'description' => 'Experience the lush and dangerous Rook Islands. Play as Jason Brody and confront pirates and other threats in this tropical paradise.',
            'releaseDate' => '2012-12-04',
            'price' => 29.99,
            'g_image' => 'far_cry_3.jpg',
            'background_image' => 'far_cry_3_background.jpg',
            'processor' => 'Intel Core i3',
            'gpu' => 'NVIDIA GeForce GTX 8800',
            'ram' => '4GB',
            'storage' => '15GB',
            'rating_id' => $ratings->where('name', 'Mature')->first()->id, 
            'franchise_id' => $franchise->where('name', 'Farcry')->first()->id,
        ]);
        $game13->genres()->attach([
            $genres->where('name', 'Shooter')->first()->id, 
            $genres->where('name', 'Open-World')->first()->id
        ]);
        $game13->platforms()->attach([
            $platforms->where('name', 'Windows')->first()->id, 
            $platforms->where('name', 'Xbox')->first()->id,
            $platforms->where('name', 'PlayStation')->first()->id
        ]);

        $game14 = Game::create([
            'title' => 'Far Cry 4',
            'description' => 'Journey to the Himalayan region of Kyrat and become embroiled in a civil war. Explore a stunning open world and confront a ruthless dictator.',
            'releaseDate' => '2014-11-18',
            'price' => 39.99,
            'g_image' => 'far_cry_4.jpg',
            'background_image' => 'far_cry_4_background.jpg',
            'processor' => 'Intel Core i5',
            'gpu' => 'NVIDIA GeForce GTX 460',
            'ram' => '4GB',
            'storage' => '30GB',
            'rating_id' => $ratings->where('name', 'Mature')->first()->id, 
            'franchise_id' => $franchise->where('name', 'Farcry')->first()->id,
        ]);
        $game14->genres()->attach([
            $genres->where('name', 'Shooter')->first()->id, 
            $genres->where('name', 'Open-World')->first()->id
        ]);
        $game14->platforms()->attach([
            $platforms->where('name', 'Windows')->first()->id, 
            $platforms->where('name', 'Xbox')->first()->id,
            $platforms->where('name', 'PlayStation')->first()->id
        ]);

        $game15 = Game::create([
            'title' => 'Far Cry 5',
            'description' => 'Enter the fictional Hope County, Montana, and take on a doomsday cult led by Joseph Seed. Explore the open world and liberate the county.',
            'releaseDate' => '2018-03-27',
            'price' => 49.99,
            'g_image' => 'far_cry_5.jpg',
            'background_image' => 'far_cry_5_background.jpg',
            'processor' => 'Intel Core i5',
            'gpu' => 'NVIDIA GeForce GTX 670',
            'ram' => '8GB',
            'storage' => '30GB',
            'rating_id' => $ratings->where('name', 'Mature')->first()->id, 
            'franchise_id' => $franchise->where('name', 'Farcry')->first()->id,
        ]);
        $game15->genres()->attach([
            $genres->where('name', 'Shooter')->first()->id, 
            $genres->where('name', 'Open-World')->first()->id
        ]);
        $game15->platforms()->attach([
            $platforms->where('name', 'Windows')->first()->id, 
            $platforms->where('name', 'Xbox')->first()->id,
            $platforms->where('name', 'PlayStation')->first()->id
        ]);

        $game16 = Game::create([
            'title' => 'Far Cry Primal',
            'description' => 'Travel back to the Stone Age and experience the primal world. Survive in a land of danger, confront predators, and build your own tribe.',
            'releaseDate' => '2016-02-23',
            'price' => 34.99,
            'g_image' => 'far_cry_primal.jpg',
            'background_image' => 'far_cry_primal_background.jpg',
            'processor' => 'Intel Core i3',
            'gpu' => 'NVIDIA GeForce GTX 460',
            'ram' => '4GB',
            'storage' => '20GB',
            'rating_id' => $ratings->where('name', 'Mature')->first()->id, 
            'franchise_id' => $franchise->where('name', 'Farcry')->first()->id,
        ]);
        $game16->genres()->attach([
            $genres->where('name', 'Shooter')->first()->id, 
            $genres->where('name', 'Open-World')->first()->id
        ]);
        $game16->platforms()->attach([
            $platforms->where('name', 'Windows')->first()->id, 
            $platforms->where('name', 'Xbox')->first()->id,
            $platforms->where('name', 'PlayStation')->first()->id
        ]);

        $game17 = Game::create([
            'title' => 'World of Warcraft',
            'description' => 'Embark on epic adventures in the vast and ever-changing world of Azeroth. Choose your faction and explore dungeons, raids, and PvP battlegrounds.',
            'releaseDate' => '2004-11-23',
            'price' => 14.99,
            'g_image' => 'world_of_warcraft.jpg',
            'background_image' => 'world_of_warcraft_background.jpg',
            'processor' => 'Intel Core i5',
            'gpu' => 'NVIDIA GeForce GTX 560',
            'ram' => '4GB',
            'storage' => '100GB',
            'rating_id' => $ratings->where('name', 'Everyone 10+')->first()->id,
            'franchise_id' => $franchise->where('name', "Warcraft")->first()->id,
            
        ]);
        $game17->genres()->attach([
            $genres->where('name', 'Strategy')->first()->id,
            $genres->where('name', 'MMORPG')->first()->id,
        ]);
        $game17->platforms()->attach([
            $platforms->where('name', 'Windows')->first()->id,
        ]);

        $game18 = Game::create([
            'title' => 'Hearthstone',
            'description' => 'Play the digital collectible card game set in the Warcraft universe. Build decks, challenge opponents, and complete quests in this strategic card battle.',
            'releaseDate' => '2014-03-11',
            'price' => 6.99,
            'g_image' => 'hearthstone.jpg',
            'background_image' => 'hearthstone_background.jpg',
            'processor' => 'Intel Core 2 Duo',
            'gpu' => 'NVIDIA GeForce 8600M GT',
            'ram' => '2GB',
            'storage' => '3GB',,
            'rating_id' => $ratings->where('name', 'Everyone 10+')->first()->id,
            'franchise_id' => $franchise->where('name', "Warcraft")->first()->id,
            
        ]);
        $game18->genres()->attach([
            $genres->where('name', 'Strategy')->first()->id,
            $genres->where('name', 'Card Collectible')->first()->id,
        ]);
        $game18->platforms()->attach([
            $platforms->where('name', 'Windows')->first()->id,
        ]);

        $game19 = Game::create([
            'title' => "Assassin's Creed Valhalla",
            'description' => 'Embark on a Viking saga as Eivor, exploring the Dark Ages of England. Raid, build, and lead your clan in epic battles and adventures.',
            'releaseDate' => '2020-11-10',
            'price' => 59.99,
            'g_image' => 'assassins_creed_valhalla.jpg',
            'background_image' => 'assassins_creed_valhalla_background.jpg',
            'processor' => 'Intel Core i7',
            'gpu' => 'NVIDIA GeForce RTX 2080',
            'ram' => '16GB',
            'storage' => '50GB',,
            'rating_id' => $ratings->where('name', 'Mature')->first()->id,
            'franchise_id' => $franchise->where('name', "Assassin's Creed")->first()->id,
        ]);
        $game19->genres()->attach([
            $genres->where('name', 'Action')->first()->id, 
            $genres->where('name', 'Adventure')->first()->id, 
            $genres->where('name', 'Open-World')->first()->id
        ]);
        $game19->platforms()->attach([
            $platforms->where('name', 'Windows')->first()->id, 
            $platforms->where('name', 'Xbox')->first()->id,
            $platforms->where('name', 'PlayStation')->first()->id
        ]);

        $game20 = Game::create([
            'title' => "Assassin's Creed IV: Black Flag",
            'description' => 'Set sail as the pirate Edward Kenway in the Caribbean. Plunder ships, explore islands, and uncover the secrets of the Assassin Order.',
            'releaseDate' => '2013-10-29',
            'price' => 24.99,
            'g_image' => 'assassins_creed_black_flag.jpg',
            'background_image' => 'assassins_creed_black_flag_background.jpg',
            'processor' => 'Intel Core i5',
            'gpu' => 'NVIDIA GeForce GTX 260',
            'ram' => '4GB',
            'storage' => '30GB',,
            'rating_id' => $ratings->where('name', 'Mature')->first()->id,
            'franchise_id' => $franchise->where('name', "Assassin's Creed")->first()->id,
        ]);
        $game20->genres()->attach([
            $genres->where('name', 'Action')->first()->id, 
            $genres->where('name', 'Adventure')->first()->id, 
            $genres->where('name', 'Open-World')->first()->id
        ]);
        $game20->platforms()->attach([
            $platforms->where('name', 'Windows')->first()->id, 
            $platforms->where('name', 'Xbox')->first()->id,
            $platforms->where('name', 'PlayStation')->first()->id
        ]);

        $game21 = Game::create([
            'title' => "Assassin's Creed Syndicate",
            'description' => 'Step into Victorian London as the twin assassins Jacob and Evie Frye. Fight against the Templars and free the city from oppression.',
            'releaseDate' => '2015-10-23',
            'price' => 29.99,
            'g_image' => 'assassins_creed_syndicate.jpg',
            'background_image' => 'assassins_creed_syndicate_background.jpg',
            'processor' => 'Intel Core i5',
            'gpu' => 'NVIDIA GeForce GTX 760',
            'ram' => '6GB',
            'storage' => '50GB',
            'rating_id' => $ratings->where('name', 'Mature')->first()->id,
            'franchise_id' => $franchise->where('name', "Assassin's Creed")->first()->id,
        ]);
        $game21->genres()->attach([
            $genres->where('name', 'Action')->first()->id, 
            $genres->where('name', 'Adventure')->first()->id, 
            $genres->where('name', 'Open-World')->first()->id
        ]);
        $game21->platforms()->attach([
            $platforms->where('name', 'Windows')->first()->id, 
            $platforms->where('name', 'Xbox')->first()->id,
            $platforms->where('name', 'PlayStation')->first()->id
        ]);

        $game22 = Game::create([
            'title' => "Assassin's Creed Odyssey",
            'description' => 'Explore ancient Greece as either Kassandra or Alexios. Embark on an epic journey, make choices, and uncover the secrets of your family and the First Civilization.',
            'releaseDate' => '2018-10-05',
            'price' => 39.99,
            'g_image' => 'assassins_creed_odyssey.jpg',
            'background_image' => 'assassins_creed_odyssey_background.jpg',
            'processor' => 'Intel Core i5',
            'gpu' => 'NVIDIA GeForce GTX 660',
            'ram' => '8GB',
            'storage' => '46GB',
            'rating_id' => $ratings->where('name', 'Mature')->first()->id,
            'franchise_id' => $franchise->where('name', "Assassin's Creed")->first()->id,
        ]);
        $game22->genres()->attach([
            $genres->where('name', 'Action')->first()->id, 
            $genres->where('name', 'Adventure')->first()->id, 
            $genres->where('name', 'Open-World')->first()->id
        ]);
        $game22->platforms()->attach([
            $platforms->where('name', 'Windows')->first()->id, 
            $platforms->where('name', 'Xbox')->first()->id,
            $platforms->where('name', 'PlayStation')->first()->id
        ]);

        $game23 = Game::create([
            'title' => "Assassin's Creed Unity",
            'description' => 'Experience the French Revolution as Arno Dorian. Join the Brotherhood and uncover a conspiracy in the heart of Paris.',
            'releaseDate' => '2014-11-11',
            'price' => 19.99,
            'g_image' => 'assassins_creed_unity.jpg',
            'background_image' => 'assassins_creed_unity_background.jpg',
            'processor' => 'Intel Core i5',
            'gpu' => 'NVIDIA GeForce GTX 680',
            'ram' => '6GB',
            'storage' => '50GB',
            'rating_id' => $ratings->where('name', 'Mature')->first()->id,
            'franchise_id' => $franchise->where('name', "Assassin's Creed")->first()->id,
        ]);
        $game23->genres()->attach([
            $genres->where('name', 'Action')->first()->id, 
            $genres->where('name', 'Adventure')->first()->id, 
            $genres->where('name', 'Open-World')->first()->id
        ]);
        $game23->platforms()->attach([
            $platforms->where('name', 'Windows')->first()->id, 
            $platforms->where('name', 'Xbox')->first()->id,
            $platforms->where('name', 'PlayStation')->first()->id
        ]);

        $game24 = Game::create([
            'title' => "Assassin's Creed Origins",
            'description' => 'Visit ancient Egypt as Bayek, a Medjay, and uncover the origins of the Assassin Brotherhood. Explore a vast open world and engage in epic battles.',
            'releaseDate' => '2017-10-27',
            'price' => 34.99,
            'g_image' => 'assassins_creed_origins.jpg',
            'background_image' => 'assassins_creed_origins_background.jpg',
            'processor' => 'Intel Core i5',
            'gpu' => 'NVIDIA GeForce GTX 660',
            'ram' => '6GB',
            'storage' => '42GB',
            'rating_id' => $ratings->where('name', 'Mature')->first()->id,
            'franchise_id' => $franchise->where('name', "Assassin's Creed")->first()->id,
        ]);
        $game24->genres()->attach([
            $genres->where('name', 'Action')->first()->id, 
            $genres->where('name', 'Adventure')->first()->id, 
            $genres->where('name', 'Open-World')->first()->id
        ]);
        $game24->platforms()->attach([
            $platforms->where('name', 'Windows')->first()->id, 
            $platforms->where('name', 'Xbox')->first()->id,
            $platforms->where('name', 'PlayStation')->first()->id
        ]);

    }
}
