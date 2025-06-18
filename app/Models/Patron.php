<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patron extends Model
{

      protected $fillable = ['name', 'contact' , 'game_id' , 'description'];

    public function games() {
        return $this->hasMany(Game::class);
    }

}
