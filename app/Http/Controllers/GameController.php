<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Http\Requests\StoreGameRequest;
use App\Http\Requests\UpdateGameRequest;

class GameController extends Controller
{
    public function index() {
        $games = Game::all();

        return view("viewGames", compact("games"));
    }
}
