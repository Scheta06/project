<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\ExpressVersion;
use App\Models\FormFactor;
use App\Models\Motherboard;
use App\Models\TypeOfMemory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */

    public function run(): void
    {
        $this->call([
            /*Работают*/

            // UserSeeder::class,
            // SocketSeeder::class,
            // VendorSeeder::class,
            // ChipsetSeeder::class,
            // ProcessorSeeder::class,

            /*Не работают*/

            ExpressVersion::class,
            // FormFactor::class,
            // Motherboard::class,
        ]);
    }
}
