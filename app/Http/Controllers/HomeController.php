<?php

namespace App\Http\Controllers;

use App\Models\Processor;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $userData = Auth::user();

        $typeOfComponents = [
            'processors' => 'Процессоры',
            'motherboards' => 'Материнские платы',
            'coolers' => 'Кулеры',
            'storages' => 'Хранилища',
            'ram' => 'Оперативная память',
            'videocards' => 'Видеокарты',
            'psu' => 'Блоки питания',
            'cases' => 'Корпусы',
        ];

        $processorsCount = sizeof(Processor::all());

        return view('index', compact('userData', 'typeOfComponents', 'processorsCount'));
    }
}
