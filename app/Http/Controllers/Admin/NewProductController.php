<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Models\Chipset;
use App\Models\Cooler;
use App\Models\ExpressVersion;
use App\Models\FormFactor;
use App\Models\Frequency;
use App\Models\MemoryCapacity;
use App\Models\Microarchitecture;
use App\Models\Motherboard;
use App\Models\Processor;
use App\Models\ProcessorGeneration;
use App\Models\RandomAccessMemory;
use App\Models\Socket;
use App\Models\Storage;
use App\Models\TypeOfMemory;
use App\Models\Vendor;
use App\Models\Videocard;
use Illuminate\Http\Request;

class NewProductController extends BaseController
{
    protected $configData;
    protected $inputConfigData;

    public function __construct()
    {
        $this->configData = config('constants.typeOfComponents');
        $this->inputConfigData = config('constants.dataOfComponents');
    }

    public function index()
    {
        return view('admin.createProduct.index', ['typeOfComponents' => $this->configData]);
    }

    public function show($type)
    {
        $title = $this->configData[$type];
        $data = $this->inputConfigData[$type];
        $socket = Socket::all();
        $processorGeneration = ProcessorGeneration::all();
        $vendor = Vendor::all();
        $chipset = Chipset::all();
        $formFactor = FormFactor::all();
        $expressVersion = ExpressVersion::all();
        $typeOfMemory = TypeOfMemory::all();
        $memoryCapacity = MemoryCapacity::all();
        $frequency = Frequency::all();
        $microarchitectures = Microarchitecture::all();

        return view('admin.createProduct.show', [
            'type' => $type,
            'data' => $data,
            'title' => $title,
            'specificationArray' => [
                'processors' => [
                    'processor_generation_id' => $processorGeneration,
                    'socket_id' => $socket,
                    'vendor_id' => $vendor,
                ],
                'motherboards' => [
                    'socket_id' => $socket,
                    'chipset_id' => $chipset,
                    'form_id' => $formFactor,
                    'express_version_id' => $expressVersion,
                    'type_of_memory_id' => $typeOfMemory,
                    'vendor_id' => $vendor,
                ],
                'coolers' => [
                    'vendor_id' => $vendor,
                ],
                'storages' => [
                    'memory_capacity_id' => $memoryCapacity,
                    'vendor_id' => $vendor,
                ],
                'random_access_memory' => [
                    'memory_capacity_id' => $memoryCapacity,
                    'frequency_id' => $frequency,
                    'type_of_memory_id' => $typeOfMemory,
                    'vendor_id' => $vendor,
                ],
                'videocards' => [
                    'microarchitecture_id' => $microarchitectures,
                    'express_version_id' => $expressVersion,
                    'memory_capacity_id' => $memoryCapacity,
                    'type_of_memory_id' => $typeOfMemory,
                    'vendor_id' => $vendor,
                ],
                'psu' => [
                    'form_id' => $formFactor,
                    'vendor_id' => $vendor,
                ],
                'cases' => [
                    'form_id' => $formFactor,
                    'vendor_id' => $vendor,
                ],
            ],
        ]);
    }

    public function create(Request $request, $type)
    {
        $data = null;
        switch ($type) {
            case 'processors':
                $data = $request->validate([
                    'title' => 'required',
                    'description' => 'required',
                    'base_frequency' => 'required',
                    'max_frequency' => 'required',
                    'count_of_cores' => 'required',
                    'count_of_streams' => 'required',
                    'tdp' => 'required',
                    'processor_generation_id' => 'required',
                    'socket_id' => 'required',
                    'vendor_id' => 'required',
                ]);
                Processor::create($data);
                break;
            case 'motherboards':
                $data = $request->all();
                Motherboard::create($data);
                break;
            case 'coolers':
                $data = $request->all();
                Cooler::create($data);
                break;
            case 'storages':
                $data = $request->all();
                Storage::create($data);
                break;
            case 'random_access_memory':
                $data = $request->all();
                RandomAccessMemory::create($data);
                break;
            case 'videocards':
                $data = $request->all();
                Videocard::create($data);
                break;
            case 'psu':
                $data = $request->all();
                Videocard::create($data);
                break;
            case 'cases':
                $data = $request->all();
                Videocard::create($data);
                break;
        }

        return redirect()->route('admin.createProduct.index')->with('status', 'Компонент успешно создан');
    }
}
