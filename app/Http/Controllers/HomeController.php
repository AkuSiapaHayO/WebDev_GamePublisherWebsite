<?php

namespace App\Http\Controllers;

use App\Models\Franchise;
use App\Models\Game;
use App\Models\Genre;
use App\Models\Platform;
use App\Models\Rating;
use App\Models\Event;

class HomeController extends Controller
{
    public function index()
    {
        $randomFranchises = Franchise::inRandomOrder()->distinct()->take(4)->get();
        $randomGames = Game::inRandomOrder()->distinct()->take(7)->get();
        $randomEvents = Event::inRandomOrder()->distinct()->take(7)->get();

        return view('index', compact('randomGames', 'randomFranchises', 'randomEvents'));
    }
}