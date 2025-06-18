<?php

namespace App\Http\Controllers;

use App\Models\Captain;
use App\Models\Team;
use Illuminate\Http\Request;

class CaptainController extends Controller
{
    public function index()
    {
        $captains = Captain::with('team.members')->get();
        return view('captains.index', compact('captains'));
    }

    public function create()
    {
        $teams = Team::all();
        return view('captains.create', compact('teams'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',

        ]);

        Captain::create($request->all());

        return redirect()->route('captains.index')->with('success', 'Captain created successfully.');
    }

    public function show(Captain $captain)
    {
        return view('captains.show', compact('captain'));
    }

    public function edit(Captain $captain)
    {
        return view('captains.edit', compact('captain'));
    }

    public function update(Request $request, Captain $captain)
    {
        $request->validate([
            'name' => 'required|string|max:255',

        ]);

        $captain->update($request->all());

        return redirect()->route('captains.index')->with('success', 'Captain updated successfully.');
    }

    public function destroy(Captain $captain)
    {
        $captain->delete();
        return redirect()->route('captains.index')->with('success', 'Captain deleted successfully.');
    }
}
