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
        Schema::create('videocards', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->float('max_frequency');


            $table->foreignId('microarchitecture_id')->references('id')->on('microarchitectures')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('express_version_id')->references('id')->on('size_of_videocards')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('size_of_memory_id')->references('id')->on('size_of_videocards')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('type_of_memory')->references('id')->on('type_of_memories')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('vendor_id')->references('id')->on('vendors')->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('videocards');
    }
};
