<?php

use App\Http\Controllers\CommunityPostController;
use App\Http\Controllers\FranchiseController; 
use App\Http\Controllers\GameController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [HomeController::class,'index']);
Route::get('/viewGames', [HomeController::class,'index1'])->name('viewGames');
Route::get('/viewDetailGame/{game}', [HomeController::class, 'showGameDetails'])->name('game.detail');
Route::get('/viewFranchises', [HomeController::class, 'index2']);
Route::get('/viewDetailFranchise/{franchise}', [HomeController::class, 'showFranchiseDetails'])->name('franchise.detail');
Route::get('/viewCommunity',[CommunityPostController::class,'index']);
Route::get('/viewAboutUs', [HomeController::class, 'indexAboutUs']);
Route::get('/viewSupport', [HomeController::class, 'indexSupport']);
Route::get('/viewContactUs', [HomeController::class,'indexContactUs']);