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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('category')->nullable();
            $table->string('course_name')->nullable();
            $table->string('short_bio')->nullable();
            $table->string('course_price')->nullable();
            $table->string('discount_price')->nullable();
            $table->string('course_des')->nullable();
            $table->string('banner')->nullable();
            $table->string('intro_video')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
