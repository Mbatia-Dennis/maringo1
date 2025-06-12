<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
     public function team() {
        return $this->HasMany(Team::class);
    }
}
