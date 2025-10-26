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
        Schema::create('mission_visions', function (Blueprint $table) {
            $table->id();
            $table->text('mission')->nullable();
            $table->text('vision')->nullable();
            $table->text('history')->nullable();
            $table->json('team')->nullable(); // JSON array of team members
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mission_visions');
    }
};
