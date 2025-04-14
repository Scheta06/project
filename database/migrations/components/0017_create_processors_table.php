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
        Schema::create('processors', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->float('base_frequency', precision: 3);
            $table->float('max_frequency', precision: 3);
            $table->unsignedInteger('count_of_cores');
            $table->unsignedInteger('count_of_streams');
            $table->unsignedInteger('tdp');
            
            
            $table->foreignId('frequency_of_processor_id')->references('id')->on('frequency_of_proccessors')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('socket_id')->references('id')->on('sockets')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('vendor_id')->references('id')->on('vendors')->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('processors');
    }
};
