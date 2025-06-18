<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

class Admin extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function teams()
    {
        return $this->hasMany(Team::class);
    }
    public function captains()
    {
        return $this->hasMany(Captain::class);
    }
}
