<?php
namespace App\Http\Controllers;

use App\Models\Casing;

use App\Models\Motherboard;
use App\Models\PowerSupply;
use App\Models\Processor;
use App\Models\RandomAccessMemory;
use App\Models\Storage;
use App\Models\Videocard;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Cooler;

class CatalogController extends Controller
{
    public function index()
    {
        $userData = Auth::user();

        $typeOfComponents = [
            'processors'           => 'Процессоры',
            'motherboards'         => 'Материнские платы',
            'coolers'              => 'Кулеры',
            'storages'             => 'Хранилища',
            'random_access_memory' => 'Оперативная память',
            'videocards'           => 'Видеокарты',
            'psu'                  => 'Блоки питания',
            'cases'                => 'Корпусы',
        ];

        return view('catalog', compact('userData', 'typeOfComponents'));
    }

    public function show($value)
    {
        $userData = Auth::user();

        $typeOfComponents = [
            'processors'           => 'Процессоры',
            'motherboards'         => 'Материнские платы',
            'coolers'              => 'Кулеры',
            'storages'             => 'Хранилища',
            'random_access_memory' => 'Оперативная память',
            'videocards'           => 'Видеокарты',
            'psu'                  => 'Блоки питания',
            'cases'                => 'Корпусы',
        ];

        $componentData = $typeOfComponents[$value];

        $componentModel = [];

        switch ($value) {
            case 'processors':
                $componentModel = Processor::with(['vendor', 'socket'])->get();
                break;
            case 'motherboards':
                $componentModel = Motherboard::all();
                break;
            case 'coolers':
                $componentModel = Cooler::all();
                break;
            case 'storages':
                $componentModel = Storage::all();
                break;
            case 'random_access_memory':
                $componentModel = RandomAccessMemory::all();
                break;
            case 'videocards':
                $componentModel = Videocard::all();
                break;
            case 'psu':
                $componentModel = PowerSupply::all();
                break;
            case 'cases':
                $componentModel = Casing::all();
                break;
        }

        return view('layouts.category', compact('userData', 'componentData', 'componentModel'));
    }
}
