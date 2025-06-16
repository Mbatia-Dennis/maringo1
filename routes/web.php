<?php
use App\Http\Controllers\TeamController;
//use App\Http\Controllers\PlayerController;
use App\Http\Controllers\GameController;
//use App\Http\Controllers\TournamentController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/teams', [TeamController::class, 'index'])->name('teams.index');
    Route::get('/games', [GameController::class, 'index'])->name('games.index');
    //Route::get('/tournaments', [TournamentController::class, 'index'])->name('tournaments.index');

    Route::middleware('admin')->group(function () {
        Route::resource('teams', TeamController::class)->except('index');
        //Route::resource('players', PlayerController::class);
        Route::resource('games', GameController::class)->except('index');
        //Route::resource('tournaments', TournamentController::class)->except('index');
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
