<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Models\Chipset;
use App\Models\ExpressVersion;
use App\Models\FormFactor;
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

        return view('admin.createProduct.show', [
            'type' => $type,
            'data' => $data,
            'socket' => $socket,
            'chipset' => $chipset,
            'processorGeneration' => $processorGeneration,
            'vendor' => $vendor,
            'formFactor' => $formFactor,
            'expressVersion' => $expressVersion,
            'typeOfMemory' => $typeOfMemory,
            'specificationArray' => [
                'processor' => [
                    'processorGeneration' => $processorGeneration,
                    'socket' => $socket,
                    'vendor' => $vendor,
                ],
                'motherboards' => [
                    'socket' => $socket,
                    'chipset' => $chipset,
                    'formFactor' => $formFactor,
                    'expressVersion' => $expressVersion,
                    'typeOfMemory' => $typeOfMemory,
                    'vendor' => $vendor,
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
        }

        return redirect()->route('admin.createProduct.index')->with('status', 'Компонент успешно создан');
    }
}
