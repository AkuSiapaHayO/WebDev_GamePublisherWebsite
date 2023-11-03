<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Http\Requests\StoreGameRequest;
use App\Http\Requests\UpdateGameRequest;

class GameController extends Controller
{
    // public function showRandomGames()
    // {
    //     return view("index", [
    //         "randomGames"=> Game::inRandomOrder()->distinct()->take(7)->get()
    //     ]);
    // }
}
