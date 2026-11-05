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
        Schema::create('category_attributes', function (Blueprint $table): void {
            $table->id();
            $table->foreignId('category_id')->unique()->constrained('categories')->cascadeOnDelete();
            $table->foreignId('attribute_id')->unique()->constrained('attributes')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category_attributes');
    }
};
