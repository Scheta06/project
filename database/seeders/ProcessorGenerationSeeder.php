<?php

namespace Database\Seeders;

use App\Models\ProcessorGeneration;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProcessorGenerationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $amd = 'ryzen';
        $intel = 'core';

        $ArrayOfProcessorGenerationsINTEL = [
            'i3',
            'i5',
            'i7',
        ];

        $ArrayOfProcessorGenerationsAMD = [
            '3',
            '5',
            '7',
        ];

        foreach($ArrayOfProcessorGenerationsINTEL as $item) {
            ProcessorGeneration::create([
                'title' => $item,
                'type' => $intel
            ]);
        }

        foreach($ArrayOfProcessorGenerationsAMD as $item) {
            ProcessorGeneration::create([
                'title' => $item,
                'type' => $amd
            ]);
        }
    }
}
