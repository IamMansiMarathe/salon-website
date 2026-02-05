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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('small_title');            // About Us
            $table->string('subtitle');         // Why People Choose Us!
            $table->text('description');        // Paragraph text
            $table->string('image')->nullable(); // About image
            $table->string('phone')->nullable();
            $table->integer('years_experience')->default(0); // 25
            $table->integer('happy_customers')->default(0); // 999
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
