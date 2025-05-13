<?php

namespace Database\Seeders;

use App\Models\Frequency;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FrequencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ArrayOfFrequency = [
            2666,
            2933,
            3200,
            3466,
            3600,
            4000,
        ];

        foreach($ArrayOfFrequency as $item) {
            Frequency::create([
                'title' => $item
            ]);
        }
    }
}
