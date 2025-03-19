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
        Schema::create('module_models', function (Blueprint $table) {
            $table->id();
            $table->string('category')->nullable();
            $table->string('course_name')->nullable();
            $table->string('module_name')->nullable();
            $table->string('module_topics')->nullable();
            $table->string('banner')->nullable();
            $table->string('module_video')->nullable();
            $table->string('module_des')->nullable();
            $table->string('intro_video')->nullable();
            $table->string('video_count')->nullable();
            $table->string('course_week')->nullable();
            $table->string('extra_one')->nullable();
            $table->string('extra_two')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('module_models');
    }
};
