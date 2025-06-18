<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = ['name', 'date', 'venue', 'team_id', 'patron_id'];

    public function team()
    {
        return $this->hasMany(Team::class);
    }

    public function patron()
    {
        return $this->belongsTo(Patron::class);
    }
}
