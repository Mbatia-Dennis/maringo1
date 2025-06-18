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
            $table->string('name');
            $table->foreignId('team_id');
            $table->foreignId('patron_id');
            $table->date('date');
            $table->string('venue');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
