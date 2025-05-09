<?php

namespace Database\Seeders;

use App\Models\Socket;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SocketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ArrayOfSockets = [
            'LGA 1200',
            'LGA 1700',
            'AM4',
            'AM5',
        ];

        foreach($ArrayOfSockets as $item) {
            Socket::create([
                'title' => $item
            ]);
        }
    }
}
