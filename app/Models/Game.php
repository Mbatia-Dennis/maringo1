<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
       protected $fillable = ['name', 'type', 'patron_id' , 'venue'];

    // Each Game belongs to one Patron
    public function patron() {
        return $this->belongsTo(Patron::class);
    }


}
