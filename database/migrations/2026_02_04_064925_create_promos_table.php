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
        Schema::create('promos', function (Blueprint $table) {
            $table->id();
            $table->string('small_heading')->nullable(); // e.g., "Enjoy"
            $table->string('big_number')->nullable();    // e.g., "20%"
            $table->string('unit')->nullable();          // e.g., "Off"
            $table->text('description')->nullable();     // promo description
            $table->string('button_text')->nullable();   // e.g., "Get 20% Off"
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promos');
    }
};
