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
            'g_image' => 'assassins-creed-mirage.jpg',
            'processor' => 'Intel Core i5',
            'gpu' => 'NVIDIA GeForce GTX 1060',
            'ram' => '8GB',
            'storage' => '50GB',
            'rating_id' => $ratings->where('name', 'M')->first()->id,
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
            'g_image' => 'anno-1800.jpg',
            'processor' => 'Intel Core i7',
            'gpu' => 'NVIDIA GeForce RTX 2070',
            'ram' => '16GB',
            'storage' => '60GB',
            'rating_id' => $ratings->where('name', 'E')->first()->id,
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
            'g_image' => 'avatar-frontiers-of-pandora.jpg',
            'processor' => 'Intel Core i9',
            'gpu' => 'NVIDIA GeForce RTX 3080',
            'ram' => '32GB',
            'storage' => '100GB',
            'rating_id' => $ratings->where('name', 'T')->first()->id,
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
            'g_image' => 'farcry-6.jpg',
            'processor' => 'Intel Core i5',
            'gpu' => 'NVIDIA GeForce GTX 1060',
            'ram' => '8GB',
            'storage' => '50GB',
            'rating_id' => $ratings->where('name', 'M')->first()->id, 
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
            'g_image' => 'red-dead-redemption-2.jpg',
            'processor' => 'Intel Core i7',
            'gpu' => 'NVIDIA GeForce RTX 2070',
            'ram' => '16GB',
            'storage' => '150GB',
            'rating_id' => $ratings->where('name', 'M')->first()->id,
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
            'g_image' => 'warcraft-3-reforged.jpg',
            'processor' => 'Intel Core i3',
            'gpu' => 'NVIDIA GeForce 8800',
            'ram' => '4GB',
            'storage' => '30GB',
            'rating_id' => $ratings->where('name', 'E10')->first()->id,
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
            'g_image' => 'resident-evil-4-remake.jpg',
            'processor' => 'Intel Core i5',
            'gpu' => 'NVIDIA GeForce GTX 1060',
            'ram' => '8GB',
            'storage' => '30GB',
            'rating_id' => $ratings->where('name', 'M')->first()->id, // Assuming 'M' rating
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
    }
}
