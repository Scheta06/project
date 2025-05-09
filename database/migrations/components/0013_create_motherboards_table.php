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
        Schema::create('motherboards', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('subtitle')->nullable();
            $table->text('description');


            $table->foreignId('socket_id')->references('id')->on('sockets')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('chipset_id')->references('id')->on('chipsets')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('form_id')->references('id')->on('form_factors')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('express_version_id')->references('id')->on('express_versions')->cascadeOnUpdate()->cascadeOnDelete();
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
        Schema::dropIfExists('motherboards');
    }
};
