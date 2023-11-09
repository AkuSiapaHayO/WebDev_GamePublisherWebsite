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
        $genreId = $request->get('genre');
        $platformId = $request->get('platform');
        $ratingId = $request->get('rating');

        $games = Game::query();

        if ($genreId) {
            $games->whereHas('genres', function ($query) use ($genreId) {
                $query->where('id', $genreId);
            });
        }

        if ($platformId) {
            $games->whereHas('platforms', function ($query) use ($platformId) {
                $query->where('id', $platformId);
            });
        }

        if ($ratingId) {
            $games->where('rating_id', $ratingId);
        }

        $randomGames = Game::inRandomOrder()->distinct()->take(7)->get();
        $allGenres = Genre::all();
        $allPlatforms = Platform::all();
        $allRatings = Rating::all();

        return view(
            'viewGames',
            compact('randomGames', 'games', 'allGenres', 'allPlatforms', 'allRatings'),
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
}