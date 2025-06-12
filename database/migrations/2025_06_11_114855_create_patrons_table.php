<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('patrons', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->strin('Contact');
            $table->foreignId('Game_ID');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('patrons');
    }
};
