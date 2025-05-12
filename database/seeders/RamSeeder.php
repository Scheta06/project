<?php

namespace Database\Seeders;

use App\Models\RandomAccessMemory;
use Illuminate\Database\Seeder;

class RamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RandomAccessMemory::create([
            'title' => 'XPG GAMMIX D35',
            'description' => 'Оперативная память ADATA XPG GAMMIX D35 [AX4U320016G16A-DTWHD35] – набор из двух модулей DDR4 общим объемом 32 ГБ. Они выделяются радиаторами белого цвета. Алюминиевая панель обеспечивает стабильное отведение тепла от чипов в процессе вычислительной нагрузки. Модули ADATA XPG GAMMIX D35 функционируют с частотой 3200 МГц и пропускной способностью на уровне значения 25600 Мбайт/сек, что позволяет повысить быстродействие операционной системы и программ. Благодаря небольшой высоте 34 мм оперативная память отличается широкой совместимостью с комплектующими.',
            'count_of_modules' => 2,
            'memory_capacity_id' => 5,
            'frequency_id' => 5,
            'type_of_memory_id' => 1,
            'vendor_id' => 16,
        ]);
    }
}
