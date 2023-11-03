<?php

namespace App\Http\Controllers;

use App\Models\Franchise;
use App\Models\Game;
use App\Models\Genre;
use App\Models\Platform;
use App\Models\Rating;

class HomeController extends Controller
{
    public function index()
    {
        $randomFranchises = Franchise::inRandomOrder()->distinct()->take(4)->get();
        $randomGames = Game::inRandomOrder()->distinct()->take(7)->get();

        return view('index', compact('randomGames', 'randomFranchises'));
    }
}