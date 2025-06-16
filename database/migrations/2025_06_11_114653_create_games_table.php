<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('Team_1');
            $table->string('Team_2');
            $table->foreignId('Patron_ID');
            $table->date('Date');
            $table->string('Venue');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
