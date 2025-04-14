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
        Schema::create('configurations', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            
            $table->foreignId('user_id')->references('id')->on('users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('processor_id')->references('id')->on('processors')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('motherboard_id')->references('id')->on('motherboards')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('cooler_id')->references('id')->on('coolers')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('random_access_memory_id')->references('id')->on('random_access_memories')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('storage_id')->references('id')->on('storages')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('videocard_id')->references('id')->on('videocards')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('power_supply_id')->references('id')->on('power_supplies')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('case_id')->references('id')->on('casings')->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('configurations');
    }
};
