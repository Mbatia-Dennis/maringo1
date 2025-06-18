<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Captain;
use App\Models\Member;
use App\Models\Team;

class CaptainSeeder extends Seeder
{
    public function run(): void
    {
        // Ensure you have at least 5 members and 5 teams created first
        $members = Member::inRandomOrder()->take(5)->get();
        $teams = Team::inRandomOrder()->take(5)->get();

        foreach (range(1, 5) as $index) {
            Captain::create([
                'name' => 'Captain ' . $index,
                'member_id' => $members[$index - 1]->id ?? null,
                'team_id' => $teams[$index - 1]->id ?? null,
                'description' => 'Captain for team ' . $teams[$index - 1]->name ?? 'Unknown',
            ]);
        }
    }
}
