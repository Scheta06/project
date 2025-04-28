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
        Schema::create('random_access_memories', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->integer('count_of_modules');


            $table->foreignId('memory_capacity_id')->references('id')->on('memory_capacities')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('frequency_id')->references('id')->on('frequency_of_random_access_memories')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('type_of_memory_id')->references('id')->on('type_of_memories')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('vendor_id')->references('id')->on('vendors')->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('random_access_memories');
    }
};
