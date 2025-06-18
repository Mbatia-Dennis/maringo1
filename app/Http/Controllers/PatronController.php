<?php

namespace App\Http\Controllers;

use App\Models\Patron;
use Illuminate\Http\Request;

class PatronController extends Controller
{
    public function index()
    {
        $patrons = Patron::all();
        return view('patrons.index', compact('patrons'));
    }

    public function create()
    {
        return view('patrons.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'contact' => 'required|string|max:255',
            'game_id' => 'required|exists:games,id',
        ]);

        Patron::create($request->all());

        return redirect()->route('patrons.index')->with('success', 'Patron created successfully.');
    }

    public function show(Patron $patron)
    {
        return view('patrons.show', compact('patron'));
    }

    public function edit(Patron $patron)
    {
        return view('patrons.edit', compact('patron'));
    }

    public function update(Request $request, Patron $patron)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $patron->update($request->all());

        return redirect()->route('patrons.index')->with('success', 'Patron updated successfully.');
    }

    public function destroy(Patron $patron)
    {
        $patron->delete();
        return redirect()->route('patrons.index')->with('success', 'Patron deleted successfully.');
    }
}
