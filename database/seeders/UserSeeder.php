<?php
namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'     => 'Scheta_',
            'email'    => 'schetaCrown@mail.ru',
            'password' => Hash::make('123123123'),
            'role_id'  => 1,
        ]);
    }
}
