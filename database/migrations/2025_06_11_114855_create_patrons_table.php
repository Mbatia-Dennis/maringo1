<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('patrons', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('contact');
            $table->foreignId('game_id');
            $table->string('description');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('patrons');
    }
};
