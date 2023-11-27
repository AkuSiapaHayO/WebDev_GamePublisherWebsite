<?php

namespace App\Http\Controllers;

use App\Models\Franchise;
use App\Models\Game;
use App\Models\Genre;
use App\Models\Platform;
use App\Models\Rating;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homeView()
    {
        $randomFranchises = Franchise::inRandomOrder()->distinct()->take(4)->get();
        $randomGames = Game::inRandomOrder()->distinct()->take(7)->get();

        return view(
            'index',
            compact('randomGames', 'randomFranchises'),
            [
                "javascript" => "home.js",
                "css" => "home.css"
            ]
        );
    }

    public function viewGames(Request $request)
    {
        $games = Game::paginate(5);
        $randomGames = Game::inRandomOrder()->distinct()->take(7)->get();

        // Get all genres, platforms, ratings, and franchises for the dropdown menus
        $allGenres = Genre::all();
        $allPlatforms = Platform::all();
        $allRatings = Rating::all();
        $allFranchises = Franchise::all();

        // Check if filters are applied
        $selectedGenre = $request->input('genre');
        $selectedPlatform = $request->input('platform');
        $selectedRating = $request->input('rating');
        $selectedFranchise = $request->input('franchise');

        // Apply filters if selected
        if ($selectedGenre) {
            $games = $games->filter(function ($game) use ($selectedGenre) {
                return $game->genres->contains('name', $selectedGenre);
            });
        }

        if ($selectedPlatform) {
            $games = $games->filter(function ($game) use ($selectedPlatform) {
                return $game->platforms->contains('name', $selectedPlatform);
            });
        }

        if ($selectedRating) {
            $games = $games->where('rating_id', $selectedRating);
        }

        if ($selectedFranchise) {
            $games = $games->where('franchise_id', $selectedFranchise);
        }

        if ($request->has('search')) {
            $searchTerm = $request->input('search');
            $games = $games->filter(function ($game) use ($searchTerm) {
                return stripos($game->title, $searchTerm) !== false;
            });
        }
        
        return view(
            'viewGames',
            compact('randomGames', 'allGenres', 'games', 'allPlatforms', 'allRatings', 'allFranchises'),
            [
                "javascript" => "viewGames.js",
                "css" => "viewGames.css"
            ]
        );
    }

    public function showGameDetails($id)
    {
        $game = Game::find($id);

        return view(
            'viewDetailGame',
            compact('game'),
            [
                "javascript" => "detailGame.js",
                "css" => "detailGame.css"
            ]
        );
    }

    public function index2()
    {
        $franchises = Franchise::all();
        $randomFranchise = Franchise::inRandomOrder()->first();

        return view(
            'viewFranchises',
            compact('franchises', 'randomFranchise'),
            [
                'javascript' => 'viewFranchises.js',
                'css' => 'viewFranchises.css'
            ]
        );
    }

    public function indexAboutUs()
    {
        return view(
            'viewAboutUs',
            [
                'css' => "about_us.css",
                'javascript' => 'viewAboutUs.js',
                'tailwind' => 'yes'
            ]
        );
    }

    public function indexSupport()
    {
        return view(
            'viewSupport',
            [
                'css' => "support.css",
                'javascript' => 'viewSupport.js',
                'tailwind' => 'yes'
            ]
        );
    }

    public function indexContactUs()
    {
        return view(
            'viewContactUs',
            [
                'css' => "contact.css",
                'javascript' => 'contact.js',
            ]
        );
    }

    public function showFranchiseDetails($id)
    {
        $games = Game::where('franchise_id', $id)->get();
        $franchise = Franchise::find($id);
        return view(
            'viewDetailFranchise',
            compact('franchise', 'games'),
            [
                'javascript' => 'detailFranchise.js',
                'css' => 'detailFranchise.css'
            ]
        );
    }
}
