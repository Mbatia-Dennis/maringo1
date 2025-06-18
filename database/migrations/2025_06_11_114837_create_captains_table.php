<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('captains', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('member_id');
            $table->string('description');
            $table->foreignId('team_id');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('captains');
    }
};
