<?php

namespace Database\Seeders;

use App\Models\TypeOfMemory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeOfMemorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ArrayOfTypeOfMemories = [
            'DDR4',
            'DDR5',
            'GDDR6',
            'GDDR6X',
            'GDDR7'
        ];

        foreach($ArrayOfTypeOfMemories as $item) {
            TypeOfMemory::create([
                'title' => $item,
            ]);
        }
    }
}
