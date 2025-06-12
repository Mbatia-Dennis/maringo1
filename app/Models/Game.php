<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
     public function team() {
        return $this->HasMany(Team::class);

    }
}
