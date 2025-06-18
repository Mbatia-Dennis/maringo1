<?php

use App\Http\Controllers\TeamController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PatronController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\CaptainController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware('auth')->group(function () {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');

        Route::resource('teams', TeamController::class);
        Route::resource('games', GameController::class);
        Route::resource('members', MemberController::class);
        Route::resource('patrons', PatronController::class);
        Route::resource('items', ItemController::class);
        Route::resource('captains', CaptainController::class);
        Route::resource('admin', AdminController::class)->except('index');
        Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

});
