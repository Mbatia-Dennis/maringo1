<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Captain extends Model
{

    protected $fillable = ['name','team_ID'];

    public function games()
    {
        return $this->belongsToMany(Game::class );
    }
}
