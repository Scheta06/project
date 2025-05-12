<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Videocard;
use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */

    public function run(): void
    {
        $this->call([
            // RoleSeeder::class,
            // UserSeeder::class,
            // VendorSeeder::class,
            // SocketSeeder::class,
            // ExpressVersionSeeder::class,
            // ChipsetSeeder::class,
            // TypeOfMemorySeeder::class,
            // MicroarchitecturesSeeder::class,
            // FormFactorSeeder::class,
            // MemoryCapacitySeeder::class,
            // ProcessorGenerationSeeder::class,
            // FrequencyOfRAMSeeder::class,
            // ProcessorSeeder::class,
            // MotherboardSeeder::class,
            // CoolerSeeder::class,
            // StorageSeeder::class,
            // RamSeeder::class,
            // CaseSeeder::class,
            VideocardSeeder::class,
        ]);
    }
}
