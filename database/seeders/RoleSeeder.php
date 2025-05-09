<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ArrayOfRoles = [
           'admin',
           'user',
        ];

        foreach($ArrayOfRoles as $item) {
            Role::create([
                'type' => $item
            ]);
        }
    }
}
