<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Captain extends Model
{

    protected $fillable = ['name','member_id' , 'description' , 'team_id'];

    public function games()
    {
        return $this->hasMany(Game::class );
    }
    public function team()
    {
        return $this->belongsto(Team::class);
    }
    public function members()
    {
        return $this->belongsto(Member::class);
    }
}
