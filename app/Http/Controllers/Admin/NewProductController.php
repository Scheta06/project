<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Models\Chipset;
use App\Models\ExpressVersion;
use App\Models\FormFactor;
use App\Models\FrequencyOfRandomAccessMemory;
use App\Models\MemoryCapacity;
use App\Models\Microarchitecture;
use App\Models\Motherboard;
use App\Models\Processor;
use App\Models\ProcessorGeneration;
use App\Models\Socket;
use App\Models\TypeOfMemory;
use App\Models\Vendor;
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
        $data = $this->inputConfigData[$type];
        $socket = Socket::all();
        $processorGeneration = ProcessorGeneration::all();
        $vendor = Vendor::all();
        $chipset = Chipset::all();
        $formFactor = FormFactor::all();
        $expressVersion = ExpressVersion::all();
        $typeOfMemory = TypeOfMemory::all();
        $memoryCapacity = MemoryCapacity::all();
        $frequency = FrequencyOfRandomAccessMemory::all();
        $microarchitectures = Microarchitecture::all();

        return view('admin.createProduct.show', [
            'type' => $type,
            'data' => $data,
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
                    'vendor_id' => $vendor
                ],
                'storages' => [
                    'memory_capacity_id' => $memoryCapacity,
                    'vendor_id' => $vendor
                ],
                'random_access_memory' => [
                    'memory_capacity_id' => $memoryCapacity,
                    'frequency_id' => $frequency
                ],
                'videocards' => [
                    'microarchitecture_id' => $microarchitectures,
                    'express_version_id' => $expressVersion,
                    'memory_capacity_id' => $memoryCapacity,
                    'type_of_memory_id' => $typeOfMemory,
                    'vendor_id' => $vendor
                ],
                'psu' => [
                    'form_id' => $formFactor,
                    'vendor_id' => $vendor,
                ],
                'cases' => [
                    'form_id' => $formFactor,
                    'vendor_id' => $vendor,
                ]
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
        }

        return redirect()->route('admin.createProduct.index')->with('status', 'Компонент успешно создан');
    }
}
