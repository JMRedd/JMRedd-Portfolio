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
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('project_status');
            $table->string('project_type');
            $table->string('project_duration');
            $table->string('software_used');
            $table->string('languages_used');
            $table->string('primary_roles');
            $table->string('file_path');
            $table->string('itch_link');
            $table->string('steam_link');
            $table->text('body');
            $table->string('image_path')->nullable(); // Add image_path field
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
