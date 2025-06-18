<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
        $this->middleware('admin');
    }
    public function index() {
        return view('admin.dashboard');[
        'teamsCount' => \App\Models\Team::count(),
        'membersCount' => \App\Models\Member::count(),
        'gamesCount' => \App\Models\Game::count(),
        'patronsCount' => \App\Models\Patron::count(),
        'itemsCount' => \App\Models\Item::count(),
        'captainsCount' => \App\Models\Captain::count(),
        'usersCount' => \App\Models\User::count(),
        'adminsCount' => \App\Models\User::where('role', 'admin')->count(),
        ];
    }

    public function create(Request $request) {
        return view('admin.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);
        $user = new \App\Models\User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->role = 'admin'; // Set role to admin
    }

    public function edit($id) {
        $user = \App\Models\User::findOrFail($id);
        return view('admin.edit', compact('user'));
    }
    public function update(Request $request, $id) {
        $user = \App\Models\User::findOrFail($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        if ($request->filled('password')) {
            $user->password = bcrypt($request->input('password'));
        }
        $user->save();
        return redirect()->route('admin.index')->with('success', 'User updated successfully.');
    }
    public function destroy($id) {
        $user = \App\Models\User::findOrFail($id);
        $user->delete();
        return redirect()->route('admin.index')->with('success', 'User deleted successfully.');
    }
    public function show($id) {
        $user = \App\Models\User::findOrFail($id);
        return view('admin.show', compact('user'));
    }
}
