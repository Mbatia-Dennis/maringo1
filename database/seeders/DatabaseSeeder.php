<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Team;
use App\Models\Captain;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    public function run() {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);
        $team = Team::create(['name' => 'Sample Team', 'description' => 'Test team']);
        Captain::create(['name' => 'Sample Captain', 'team_id' => $team->id]);
        $team->update(['captain_id' => Captain::first()->id]);
    }
}
