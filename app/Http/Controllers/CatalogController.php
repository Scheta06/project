<?php
namespace App\Http\Controllers;

use App\Models\Casing;
use App\Models\Cooler;
use App\Models\Motherboard;
use App\Models\PowerSupply;
use App\Models\Processor;
use App\Models\RandomAccessMemory;
use App\Models\Storage;
use App\Models\Videocard;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class CatalogController extends Controller
{
    protected $typeOfComponents = [
        'processors'           => 'Процессоры',
        'motherboards'         => 'Материнские платы',
        'coolers'              => 'Кулеры',
        'storages'             => 'Хранилища',
        'random_access_memory' => 'Оперативная память',
        'videocards'           => 'Видеокарты',
        'psu'                  => 'Блоки питания',
        'cases'                => 'Корпусы',
    ];

    protected $processorsData;
    protected $motherboardsData;
    protected $coolersData;
    protected $storageData;
    protected $ramData;
    protected $videocardsData;
    protected $psuData;
    protected $casesData;

    public function __construct()
    {
        $this->processorsData   = Processor::with(['processorGeneration', 'vendor', 'socket']);
        $this->motherboardsData = Motherboard::with(['configuration', 'socket', 'chipset', 'formFactor', 'expressVersion', 'typeOfMemory', 'vendor']);
        $this->coolersData      = Cooler::with(['configuration', 'vendor']);
        $this->storageData      = Storage::with(['sizeOfStorage', 'vendor']);
        $this->ramData          = RandomAccessMemory::with(['configuration', 'frequencyOfRandomAccessMemory', 'typeOfRandomAccessMemory', 'vendor']);
        $this->videocardsData   = Videocard::with(['configuration', 'microarchitecture', 'expressVersion', 'sizeOfVideoсard', 'typeOfMemory', 'vendor']);
        $this->psuData          = PowerSupply::with(['configuration', 'formFactor', 'vendor']);
        $this->casesData        = Casing::with(['configuration', 'formFactor', 'vendor']);
    }

    public function index()
    {
        $userData = Auth::user();

        $typeOfComponents = $this->typeOfComponents;

        return view('category', compact('userData', 'typeOfComponents'));
    }

    public function show($value)
    {
        $userData = Auth::user();

        $componentData = $this->typeOfComponents[$value];

        $componentModel = [];

        $type = '';

        switch ($value) {
            case 'processors':
                $type           = 'processors';
                $componentModel = $this->processorsData->paginate(10);
                break;
            case 'motherboards':
                $type           = 'motherboards';
                $componentModel = $this->motherboardsData->paginate(10);
                break;
            case 'coolers':
                $type           = 'coolers';
                $componentModel = $this->coolersData->paginate(10);
                break;
            case 'storages':
                $type           = 'storages';
                $componentModel = $this->storageData->paginate(10);
                break;
            case 'random_access_memory':
                $type           = 'random_access_memory';
                $componentModel = $this->ramData->paginate(10);
                break;
            case 'videocards':
                $type           = 'videocards';
                $componentModel = $this->videocardsData->paginate(10);
                break;
            case 'psu':
                $type           = 'psu';
                $componentModel = $this->psuData->paginate(10);
                break;
            case 'cases':
                $type           = 'cases';
                $componentModel = $this->casesData->paginate(10);
                break;
            default:
                abort(404);
                break;
        }

        return view('all-products', compact('userData', 'componentData', 'componentModel', 'type'));
    }

    public function showProduct($type, $id)
    {
        $userData = Auth::user();

        $data = 0;

        switch ($type) {
            case 'processors':
                $data = $this->processorsData->findOrFail($id);
                break;
            case 'motherboards':
                $data = $this->motherboardsData->findOrFail($id);
                break;
            case 'coolers':
                $data = $this->coolersData->findOrFail($id);
                break;
        }

        return view('product-card', compact('userData', 'data', 'type'));
    }
}
