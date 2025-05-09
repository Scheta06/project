<?php

namespace Database\Seeders;

use App\Models\Microarchitecture;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MicroarchitecturesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ArrayOfMicroarchitectures = [
            'rdna 2',
            'rdna 3',
            'nvidia blackwell'
        ];

        foreach($ArrayOfMicroarchitectures as $item) {
            Microarchitecture::create([
                'title' => $item,
                'description' => ''
            ]);
        }
    }
}
