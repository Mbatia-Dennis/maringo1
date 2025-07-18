<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = ['name', 'description', 'captain_id'];

    public function members()
    {
        return $this->hasMany(Member::class);
    }

    public function captain()
    {
        return $this->belongsTo(Captain::class);
    }
    public function games()
    {
        return $this->hasMany(Game::class);
    }
}
