<?php

namespace Database\Seeders;

use App\Models\Chipset;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChipsetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ArrayOfChipsets = [
            'H510',
            'B560',
            'H610',
            'B660',
            'B450',
            'A520',
            'B550',
            'A620',
            'B650',
        ];

        foreach($ArrayOfChipsets as $item) {
            Chipset::create([
                'title' => $item,
                'description' => ''
            ]);
        }
    }
}
