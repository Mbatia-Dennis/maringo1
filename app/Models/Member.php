<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = ['name', 'contact', 'email' , 'DoB' , 'team_id'];

    public function team()
    {
        return $this->hasMany(Team::class);
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
