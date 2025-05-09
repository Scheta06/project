<?php

namespace Database\Seeders;

use App\Models\FormFactor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FormFactorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $motherboards = 'mb';
        $cases = 'case';
        $powerSupply = 'psu';

        $ArrayOfFormFactorMotherboards = [
            'standart-atx',
            'micro-atx',
            'mini-itx'
        ];

        $ArrayOfFormFactorCases = [
            'midi tower',
            'mini tower',
            'mini itx'
        ];

        $ArrayOfFormFactorPowerSupplies = [
            'atx',
            'sfx',
            'tfx'
        ];

        foreach($ArrayOfFormFactorMotherboards as $item) {
            FormFactor::create([
                'title' => $item,
                'type' => $motherboards
            ]);
        }

        foreach($ArrayOfFormFactorCases as $item) {
            FormFactor::create([
                'title' => $item,
                'type' => $cases
            ]);
        }

        foreach($ArrayOfFormFactorPowerSupplies as $item) {
            FormFactor::create([
                'title' => $item,
                'type' => $powerSupply
            ]);
        }
    }
}
