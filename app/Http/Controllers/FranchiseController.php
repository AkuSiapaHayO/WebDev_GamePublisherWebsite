<?php

namespace App\Http\Controllers;

use App\Models\Franchise;
use App\Http\Requests\StoreFranchiseRequest;
use App\Http\Requests\UpdateFranchiseRequest;

class FranchiseController extends Controller
{
    public function showRandomFranchises()
    {
        return view("index", [
            "randomFranchises"=> Franchise::inRandomOrder()->distinct()->take(4)->get()
        ]);
    }

}
