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
            $table->string('project_status')->nullable();
            $table->string('project_type')->nullable();
            $table->string('project_duration')->nullable();
            $table->string('software_used')->nullable();
            $table->string('languages_used')->nullable();
            $table->string('primary_roles')->nullable();
            $table->string('file_path')->nullable();
            $table->string('itch_link')->nullable();
            $table->string('steam_link')->nullable();
            $table->text('body')->nullable();
            $table->string('image_path')->nullable();
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
