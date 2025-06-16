<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Captain;
use App\Models\Member;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::with('captain.member')->get();
        return view('teams.index', compact('teams'));
    }

    public function create()
    {
        $members = Member::all();
        return view('teams.create', compact('members'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'captain_id' => 'nullable|exists:captains,id',
        ]);

        $team = Team::create($request->only('name'));

        if ($request->captain_id) {
            $captain = Captain::find($request->captain_id);
            if ($captain) {
                $captain->team_id = $team->id;
                $captain->save();
            }
        }

        return redirect()->route('teams.index')->with('success', 'Team created successfully.');
    }

    public function show(Team $team)
    {
        $team->load('members', 'captain.member', 'games');
        return view('teams.show', compact('team'));
    }

    public function edit(Team $team)
    {
        $members = Member::all();
        return view('teams.edit', compact('team', 'members'));
    }

    public function update(Request $request, Team $team)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'captain_id' => 'nullable|exists:captains,id',
        ]);

        $team->update($request->only('name'));

        if ($request->captain_id) {
            $captain = Captain::find($request->captain_id);
            if ($captain) {
                $captain->team_id = $team->id;
                $captain->save();
            }
        } else {
            // Remove captain if unset
            Captain::where('team_id', $team->id)->update(['team_id' => null]);
        }

        return redirect()->route('teams.index')->with('success', 'Team updated successfully.');
    }

    public function destroy(Team $team)
    {
        // Dissociate captain and members before deletion
        Captain::where('team_id', $team->id)->update(['team_id' => null]);
        Member::where('team_id', $team->id)->update(['team_id' => null]);
        $team->delete();
        return redirect()->route('teams.index')->with('success', 'Team deleted successfully.');
    }
}
