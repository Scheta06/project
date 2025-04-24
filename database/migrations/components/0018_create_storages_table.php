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
        Schema::create('storages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->float('reading_rate');
            $table->float('recording_rate');
            $table->float('max_resource');


            $table->foreignId('size_of_memory_id')->references('id')->on('size_of_storages')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('vendor_id')->references('id')->on('vendors')->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('storages');
    }
};
