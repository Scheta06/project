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
                $componentModel = Processor::with(['processorGeneration', 'vendor', 'socket'])->get();
                return view('components.processor', compact('userData', 'componentData', 'componentModel'));
            case 'motherboards':
                $componentModel = Motherboard::with(['configuration', 'socket', 'chipset', 'formFactor', 'expressVersion', 'typeOfMemory', 'vendor'])->get();
                return view('components.motherboard', compact('userData', 'componentData', 'componentModel'));
            case 'coolers':
                $componentModel = Cooler::with(['configuration', 'vendor'])->get();
                return view('components.cooler', compact('userData', 'componentData', 'componentModel'));
            case 'storages':
                $componentModel = Storage::with(['sizeOfStorage', 'vendor'])->get();
                return view('components.storage', compact('userData', 'componentData', 'componentModel'));
            case 'random_access_memory':
                $componentModel = RandomAccessMemory::with(['configuration', 'frequencyOfRandomAccessMemory', 'typeOfRandomAccessMemory', 'vendor'])->get();
                return view('components.randomAccessMemory', compact('userData', 'componentData', 'componentModel'));
            case 'videocards':
                $componentModel = Videocard::with(['configuration', 'microarchitecture', 'expressVersion', 'sizeOfVideoсard', 'typeOfMemory', 'vendor'])->get();
                return view('components.storage', compact('userData', 'componentData', 'componentModel'));
            case 'psu':
                $componentModel = PowerSupply::all();
                break;
            case 'cases':
                $componentModel = Casing::with(['configuration', 'formFactor', 'vendor'])->get();
                return view('components.storage', compact('userData', 'componentData', 'componentModel'));
        }
    }
}
