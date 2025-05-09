<?php

namespace Database\Seeders;

use App\Models\MemoryCapacity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MemoryCapacitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ArrayOfMemoryCapacity = [
            4,
            6,
            8,
            12,
            16,
            24,
            32,
            64,
            128,
            256,
            512,
            1024,
            2048,
            4096,
            8192
        ];

        foreach($ArrayOfMemoryCapacity as $item) {
            MemoryCapacity::create([
                'capacity' => $item
            ]);
        }
    }
}
