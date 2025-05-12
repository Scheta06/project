<?php

namespace Database\Seeders;

use App\Models\Videocard;
use Illuminate\Database\Seeder;

class VideocardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Videocard::create([
            'title' => 'rx 6600',
            'description' => 'Видеокарта Sapphire AMD Radeon RX 6600 PULSE из игровой линейки обеспечивает эффектный внешний вид и высокую вычислительную мощность графики, при этом обладает компактными размерами. Процессор на архитектуре AMD RDNA 2 обладает номинальной частотой 1628 МГц. Видеопамять объемом 8 ГБ отличается пропускной способностью 14000 МГц.
            В Sapphire AMD Radeon RX 6600 PULSE применяется кулер воздушного охлаждения с двумя вентиляторами, который предотвращает перегрев при длительных сеансах игры. Передняя сторона украшена полосами красного цвета. Из интерфейсов подключения предлагаются 3 разъема DisplayPort и разъем HDMI. Надежные компоненты гарантируют стабильность работы видеокарты.',
            'max_frequency' => 2491,
            'microarchitecture_id' => 1,
            'express_version_id' => 2,
            'memory_capacity_id' => 3,
            'type_of_memory_id' => 3,
            'vendor_id' => 2,
        ]);
    }
}
