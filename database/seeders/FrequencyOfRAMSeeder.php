<?php

namespace Database\Seeders;

use App\Models\FrequencyOfRandomAccessMemory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FrequencyOfRAMSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ArrayOfFrequencyOfRAMs = [
            2666,
            2933,
            3200,
            3466,
            3600,
            4000,
        ];

        foreach($ArrayOfFrequencyOfRAMs as $item) {
            FrequencyOfRandomAccessMemory::create([
                'base_frequency' => $item
            ]);
        }
    }
}
