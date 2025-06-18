<?php
namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Patron;
use App\Models\Team;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        $games = Game::all();
        return view('games.index', compact('games'));
    }

    public function create()
    {
         $teams = Team::all();
        $patrons = Patron::all();
        return view('games.create', compact('teams', 'patrons'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        Game::create($request->all());
        return redirect()->route('games.index')->with('success', 'Game created successfully.');
    }

    public function show(Game $game)
    {
        return view('games.show', compact('game'));
    }

    public function edit(Game $game)
    {
        return view('games.edit', compact('game'));
    }

    public function update(Request $request, Game $game)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        $game->update($request->all());
        return redirect()->route('games.index')->with('success', 'Game updated successfully.');
    }

    public function destroy(Game $game)
    {
        $game->delete();
        return redirect()->route('games.index')->with('success', 'Game deleted successfully.');
    }
}
