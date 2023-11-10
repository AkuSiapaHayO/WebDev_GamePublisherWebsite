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
    public function index()
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

    public function index1(Request $request)
    {
        $games = Game::all();
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

        return view(
            'viewGames',
            compact('randomGames', 'games', 'allGenres', 'allPlatforms', 'allRatings', 'allFranchises'),
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
                'javascript'=> 'viewFranchises.js',
                'css'=> 'viewFranchises.css'
            ]
        );
    }
}