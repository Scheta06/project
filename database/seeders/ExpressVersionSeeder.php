<?php

namespace Database\Seeders;

use App\Models\ExpressVersion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExpressVersionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ArrayOfExpressVersions = [
            '3.0',
            '4.0',
            '5.0',
        ];

        foreach($ArrayOfExpressVersions as $item) {
            ExpressVersion::create([
                'title' => $item
            ]);
        }
    }
}
